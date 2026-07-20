<?php
require_once "connexion.php";

$sql = "SELECT id, nom, prenom, age, email, classe, statut_stage, date_creation FROM etudiant ORDER BY nom, prenom";

$requete = $pdo->query($sql);

$etudiants = $requete->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Liste des étdiants</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
	<h1>Liste des étudiants enregistrés</h1>
	<nav>
	<ul>
	<li><a href="index.php">Ajouter un étudiant</a></li>
	</ul>

	
	<form method="GET" action="recherche.php">
		<label for="q">Rechercher :</label>
		<input type="search" id="q" name="q" placeholder="Nom, prénom ou classe" >
		<button type="submit">Rechercher</button>
	</form>
</nav>
	</header>
	<table border="1" cellpadding="8">
		<tr>
			<th>ID</th>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Âge</th>
			<th>Email</th>
			<th>Classe</th>
			<th>Statut du stage</th>
			<th>Date de création</th>
		</tr>
		<?php foreach ($etudiants as $etudiant) {
			$classeStatut = match ($etudiant["statut_stage"]) {
				"Stage trouvé" => "statut-ok",
				"Entretien obtenu" => "statut-entretien",
				"Candidature envoyée" => "statut-candidature",
				"En recherche" => "statut-recherche",
				default => "statut-attente"
		};?>
		
			<tr id="etudiant-<?= (int) $etudiant["id"] ?>">
				<td><?php echo htmlspecialchars($etudiant["id"]); ?></td>
				<td><?php echo htmlspecialchars($etudiant["nom"]); ?></td>
				<td><?php echo htmlspecialchars($etudiant["prenom"]); ?></td>
				<td><?php echo htmlspecialchars($etudiant["age"]); ?></td>
				<td><?php echo htmlspecialchars($etudiant["email"]); ?></td>
				<td><?php echo htmlspecialchars($etudiant["classe"]); ?></td>
				<td>
        		<span class="<?= htmlspecialchars($classeStatut) ?>">
            	<?= htmlspecialchars($etudiant["statut_stage"], ENT_QUOTES, "UTF-8") ?>
        		</span>
    			</td>
    			<td><?php echo htmlspecialchars($etudiant["date_creation"]); ?></td>
			</tr>
		<?php } ?>
	</table>
	<button type="button" class="btn-supprimer" data-id="<?= (int) $etudiant["id"] ?>">Supprimer</button>

</body>
<script src="assets/js/liste.js"></script>
</html>
