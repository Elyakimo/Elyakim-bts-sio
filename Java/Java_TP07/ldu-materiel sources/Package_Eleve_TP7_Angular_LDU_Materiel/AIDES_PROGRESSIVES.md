# Aides progressives
## M0
Testez séparément 8080 et 4200. Gardez deux terminaux ouverts.
## M1
Ajoutez un bouton `id="tous"`, sélectionnez-le avec querySelector puis appelez `afficher(materiels)`.
## M2
Une propriété se déclare dans la classe et s’affiche avec `{{ propriete }}`.
## M3
Importez Materiel. Utilisez `@for (materiel of materiels; track materiel.id)`.
## M4
Testez d’abord l’API. Vérifiez provideHttpClient(), l’URL, les imports OnInit, inject et MaterielService.
## M5
Le service renvoie Observable<Materiel>. Après le POST, remplacez l’objet ayant le même id avec map().
## M6
Importez FormsModule et donnez un attribut name à chaque champ lié par ngModel.
