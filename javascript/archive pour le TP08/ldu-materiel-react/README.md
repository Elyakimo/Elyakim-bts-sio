# LDU Matériel — React

Projet de départ étudiant.

## Installation

```bash
npm install
npm run preflight
npm run dev
```

Adresse : `http://localhost:5174`

Le backend Spring Boot doit être démarré sur le port `8080`.

## Structure initiale

```text
ldu-materiel-react/
├── index.html
├── package.json
├── vite.config.js
├── scripts/
│   └── preflight.mjs
└── src/
    ├── App.jsx
    ├── main.jsx
    ├── style.css
    └── services/
        └── api.js
```

Le dossier `components/` n'est volontairement pas créé : il fera partie du TP.
