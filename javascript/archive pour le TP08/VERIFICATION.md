# Vérification du paquet

## Vérifications réalisées avant livraison

- structure des trois projets contrôlée ;
- `package.json` Vue et React validés comme JSON ;
- versions des dépendances épinglées ;
- configuration Vite contrôlée ;
- ports Vue/React distincts ;
- proxy `/api` vers Spring Boot présent dans les deux projets ;
- service de test API identique côté Vue et React ;
- syntaxe JavaScript des fichiers `.js` / `.mjs` contrôlée avec Node ;
- contrat REST vérifié sur les cinq routes prévues ;
- modèle `Materiel` cohérent avec le précédent projet LDU Matériel ;
- backend configuré sur le port 8080 ;
- base H2 embarquée pour rendre le paquet autonome ;
- deux matériels d'exemple initialisés au démarrage.

## Limite de l'environnement de génération

L'environnement ayant servi à préparer le paquet n'a pas accès au registre npm ni aux dépôts Maven depuis le shell. Il n'est donc pas possible d'affirmer qu'un `npm install` ou un téléchargement Maven a réellement été exécuté ici.

Pour éviter une fausse validation, un script `preflight` est fourni dans chaque frontend. Après installation des dépendances sur la machine enseignant, exécuter :

```bash
npm run preflight
npm run build
```

Le backend contient également `mvnw` et `mvnw.cmd` afin d'éviter le problème du wrapper absent rencontré précédemment.

## Préflight complet conseillé la veille du TP

Terminal 1 :

```bash
cd ldu-materiel-api
./mvnw spring-boot:run
```

Terminal 2 :

```bash
cd ldu-materiel-vue
npm install
npm run preflight
npm run build
npm run dev
```

Terminal 3 :

```bash
cd ldu-materiel-react
npm install
npm run preflight
npm run build
npm run dev
```

Vérifier ensuite :

- `http://localhost:5173`
- `http://localhost:5174`
- `http://localhost:8080/api/materiels`
