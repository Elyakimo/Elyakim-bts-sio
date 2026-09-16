@echo off
setlocal
where mvn >nul 2>nul
if %ERRORLEVEL% EQU 0 (
  mvn %*
  exit /b %ERRORLEVEL%
)

set MVN_VERSION=3.9.11
set BASE_DIR=%~dp0
set MAVEN_DIR=%BASE_DIR%.mvn\apache-maven-%MVN_VERSION%
set ARCHIVE=%BASE_DIR%.mvn\apache-maven-%MVN_VERSION%-bin.zip

if not exist "%MAVEN_DIR%\bin\mvn.cmd" (
  echo Maven n'est pas installe. Telechargement de Maven %MVN_VERSION%...
  if not exist "%BASE_DIR%.mvn" mkdir "%BASE_DIR%.mvn"
  powershell -NoProfile -ExecutionPolicy Bypass -Command ^
    "Invoke-WebRequest -Uri 'https://repo.maven.apache.org/maven2/org/apache/maven/apache-maven/%MVN_VERSION%/apache-maven-%MVN_VERSION%-bin.zip' -OutFile '%ARCHIVE%'; Expand-Archive -Path '%ARCHIVE%' -DestinationPath '%BASE_DIR%.mvn' -Force"
)

call "%MAVEN_DIR%\bin\mvn.cmd" %*
exit /b %ERRORLEVEL%
