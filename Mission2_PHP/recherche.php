<?php
require_once "connexion.php";
$nomRecherche = $_GET["nom"] ??"";
$resultats = [];
if (!empty($nomRecherche)) {
	$sql = "SELECT id, nom, prenom, age, email, classe, date_creation FROM etudiant WHERE nom ILIKE :nom ORDER BY id DESC";

$requete = $pdo->prepare($sql);
$requete->execute([
"nom" => "%" . $nomRecherche . "%"
]);
$resultats = $requete->fetchAll(PDO::FETCH_ASSOC);
}
?>

<DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="UTF8">
</head>
<body>


        <h1>Recherche étudiant</h1>
        <form method="GET" action="recherche.php">
                <label>Nom recherché :</label>
                <input type="text" id="nom" name="nom" value="<?php echo htmlspecialchars($nomRecherche); ?>">
		<button type = "submit>Rechercher</button>
	</form>
	<p class="nav-link"><a href="liste.php">Retour à la liste</a></p>
<?php if (!empty($nomRecherche)) { ?>
	<h2>Résultats</h2>
	<?php if (empty($resultats)) { ?>
		<p>Aucun étudiant trouvé.</p>
	<?php } else { ?>
	<table>
		<tr>
			<th>ID</th>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Âge</th>
			<th>Email</th>
		</tr>
	<?php foreach ($resultats as $etudiant) { ?>
		<tr>
			<td><?php echo htmlspecialchars($etudiant["id"]); ?></td>
			<td><?php echo htmlspecialchars($etudiant["nom"]); ?></td>
			<td><?php echo htmlspecialchars($etudiant["prenom"]); ?></td>
			<td><?php echo htmlspecialchars($etudiant["age"]); ?></td>
			<td><?php echo htmlspecialchars($etudiant["email"]); ?></td>
		</tr>
	<?php } ?>
	</table>
	<?php } ?>
		<?php } ?>
</body>
</html>
