# LDU Matériel — projets de départ Vue + React + API Spring Boot

Ce paquet contient trois projets indépendants mais compatibles :

- `ldu-materiel-vue/` : frontend Vue 3 + Vite
- `ldu-materiel-react/` : frontend React + Vite
- `ldu-materiel-api/` : backend Spring Boot + API REST

## Ports retenus

- API Spring Boot : `http://localhost:8080`
- Vue : `http://localhost:5173`
- React : `http://localhost:5174`

Les deux frontends utilisent un proxy Vite :

- `/api/...` → `http://localhost:8080/api/...`

Cela évite les problèmes CORS pendant le TP.

## Contrat REST commun

- `GET /api/materiels`
- `POST /api/materiels`
- `POST /api/materiels/{id}/emprunter`
- `POST /api/materiels/{id}/restituer`
- `DELETE /api/materiels/{id}`

Un matériel a cette forme :

```json
{
  "id": 1,
  "designation": "Ordinateur portable",
  "categorie": "Informatique",
  "etat": "Bon",
  "disponible": true
}
```

## Démarrage conseillé

### 1. Backend

```bash
cd ldu-materiel-api
./mvnw spring-boot:run
```

Sous Windows :

```bat
mvnw.cmd spring-boot:run
```

Puis vérifier :

```text
http://localhost:8080/api/materiels
```

### 2. Vue

```bash
cd ldu-materiel-vue
npm install
npm run dev
```

### 3. React

```bash
cd ldu-materiel-react
npm install
npm run dev
```

## Important pour le TP

Les frontends sont volontairement très simples : ils démarrent, affichent un écran de départ et savent seulement tester que l'API répond. Les fonctionnalités pédagogiques du TP (liste, composants métier, emprunt, restitution, filtres, etc.) restent à construire par les étudiants.
