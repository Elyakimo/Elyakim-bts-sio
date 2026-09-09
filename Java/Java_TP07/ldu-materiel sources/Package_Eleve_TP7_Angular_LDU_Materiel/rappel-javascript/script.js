const materiels = [
    { designation: "Ordinateur portable", categorie: "Informatique", disponible: true },
    { designation: "Vidéoprojecteur", categorie: "Audiovisuel", disponible: false },
    { designation: "Tablette", categorie: "Informatique", disponible: true },
    { designation: "Sex Toy", categorie: "Sexe", disponible: true }
];
const liste = document.querySelector("#liste"); 
const compteur = document.querySelector("#compteur"); 
const bouton = document.querySelector("#filtrer");
const boutonRestaurer = document.querySelector("#restaurer");

function afficher(tableau) { liste.innerHTML = tableau.map(m => `<li>${m.designation} - ${m.categorie} - ${m.disponible ? "Disponible" : "Emprunté"}</li>`).join(""); compteur.textContent = `${tableau.length} matériel(s)`; }
afficher(materiels); 
bouton.addEventListener("click", () => afficher(materiels.filter(m => m.disponible)));
boutonRestaurer.addEventListener("click", () => afficher(materiels));
