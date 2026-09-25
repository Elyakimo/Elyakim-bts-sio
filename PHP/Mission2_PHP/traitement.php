<?php
$nom = $_POST["nom"] ??"";
$prenom = $_POST["prenom"] ??"";
$age = $_POST["age"] ??"";
$email =$_POST["email"] ??"";
$classe =$_POST["classe"] ??"";

$erreurs = [];

if (empty($nom)) {
	$erreurs[] = "Le nom est obligatoire. ";
}
if (empty($prenom)){
	$erreurs[] = "Le prénom est obligatoire. ";
}
if (empty($age) || $age <=0){
	$erreurs[] = "L'âge doit être un nombre positif. ";
}
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$erreurs[] = "L'adresse email n'est pas valide.";
}
if (empty($classe)){
	$erreurs[] = "la classe est obligatoire. ";
}
?>

<DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Traitement</title>
</head>
<body>
<?php if (!empty($erreurs)) { ?>
	<h1>Erreur dans le formulaire</h1>
	<ul>
		<?php foreach ($erreurs as $erreur) { ?>
		<li><?php echo $erreur; ?></li>
		<?php } ?>
	</ul>
	<p><a href="index.php">Retour au formulaire</a></p>
<?php } else { ?>
	<h1>Données reçues</h1>
	<p>Nom : <?php echo htmlspecialchars($nom); ?></p>
	<p>Prénom : <?php echo htmlspecialchars($prenom); ?></p>
	<p>Âge : <?php echo htmlspecialchars($age); ?></p>
	<p>Email : <?php echo htmlspecialchars($email); ?></p>
	<p>Classe : <?php echo htmlspecialchars($classe); ?></p>

<?php } ?>
<?php if(empty($erreurs)) {
	require_once "connexion.php";
	$sql = "INSERT INTO etudiant (nom, prenom, age, email, classe) VALUES (:nom, :prenom, :age, :email, :classe)";
	$requete = $pdo->prepare($sql);
	$requete->execute([
		"nom" => $nom,
		"prenom" => $prenom,
		"age" => $age,
		"email" => $email,
		"classe" => $classe
	]);
}?>
<p><a href="liste.php">Voir les étudiants enregistrés</a></p>
</body>
</html>
