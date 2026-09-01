# Cartes d'aide - LDU Matériel
## A1 - Retrouver un objet
Parcourez la liste et comparez `objet.getId().equals(id)`. Retournez `null` après la boucle.
## A2 - Ajouter
Affectez `prochainId`, incrémentez-le, puis ajoutez l'objet dans la liste.
## A3 - Contrôleur
Utilisez `@Controller`, `@RequestMapping`, `Model`, `@PathVariable` et `@ModelAttribute`.
## A4 - Liste Thymeleaf
Utilisez `th:each="objet : ${materiels}"` puis `th:text`.
## A5 - Formulaire
Utilisez `method="post"`, `th:object` et un `th:field` par propriété.
## Code à trous - dernier recours
`for (Materiel objet : liste) { if (objet.getId().equals(id)) return objet; }`
