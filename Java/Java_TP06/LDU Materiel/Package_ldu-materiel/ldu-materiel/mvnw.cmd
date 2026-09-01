@echo off
where mvn >nul 2>nul
if errorlevel 1 (
  echo Maven n'est pas installe. Lancez la classe Application depuis l'IDE ou installez Maven.
  exit /b 1
)
mvn %*
