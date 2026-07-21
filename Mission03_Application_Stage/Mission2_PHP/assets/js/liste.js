	const boutons = document.querySelectorAll(".btn-supprimer");
	const zoneMessage = document.querySelector("#message");
	boutons.forEach((bouton) => {
		bouton.addEventListener("click", async () => {
			const id = bouton.dataset.id;
			const confirmation = confirm("Voulez-vous réellement supprimer cet étudiant ?");
			if (!confirmation) {
				return;
			}
			const donnees = new FormData();
			donnees.append("id", id);
			try {
				const reponse = await fetch("supprimer.php", {method: "POST", body: donnees});
				const resultat = await reponse.json();
				zoneMessage.textContent = resultat.message;
				if (resultat.success) {
					const ligne = document.querySelector(`#etudiant-${id}`);
					ligne.remove();
				}
			} catch (erreur) {
				zoneMessage.textContent = "le serveur n'a pas pu être contacté.";
	
			}
		});
	});
	const champ = document.querySelector("#rechercheAjax");
	const zone = document.querySelector("#resultatsAjax");
	champ.addEventListener("input", async () => {
		const valeur = champ.value.trim();
		if (valeur === "") {
			zone.innerHTML = "";
			return;
		}
		const reponse = await fetch(`recherche_ajax.php?q=${encodeURLComponent(valeur)}`);
		const etudiants = await reponse.json();
		if (etudiants.length === 0) {
			zone.innerHTML = "<p>Aucun étudiant trouvé.</p>";
			return;
		}
		let html = "<table border='1' cellpadding='5' cellspacing='0'>";
		html += "<thead><tr><th>Nom</th><th>Prénom</th><th>Classe</th><th>Statut stage</th></tr></thead>";
		html += "<tbody>";
		for (const etudiant of etudiants) {
			html += "<tr>";
			html += `<td>${etudiant.nom}</td>`;
			html += `<td>${etudiant.prenom}</td>`;
        	html += `<td>${etudiant.classe}</td>`;
        	html += `<td>${etudiant.statut_stage}</td>`;
        	html += "</tr>";
		}
		html += "</tbody></table>";
		zone.innerHTML = html;


	});