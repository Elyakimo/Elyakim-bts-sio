# LDU Matériel API

Backend autonome prévu pour les TP Vue et React.

## Choix pédagogique

La base utilisée ici est H2 en mémoire afin que les étudiants puissent démarrer le backend immédiatement sans configurer PostgreSQL. Le contrat REST est le même que celui utilisé précédemment dans LDU Matériel.

## Lancement

macOS / Linux :

```bash
./mvnw spring-boot:run
```

Windows :

```bat
mvnw.cmd spring-boot:run
```

API :

```text
http://localhost:8080/api/materiels
```

Console H2 :

```text
http://localhost:8080/h2-console
```

JDBC URL :

```text
jdbc:h2:mem:ldumateriel
```

Utilisateur : `sa`  
Mot de passe : vide
