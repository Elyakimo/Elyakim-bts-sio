<?php
require_once "connexion.php";

$nom = trim($_POST["nom"] ?? "");
$prenom = trim($_POST["prenom"] ?? "");
$age = $_POST["age"] ?? "";
$email = trim($_POST["email"] ?? "");
$classe = trim($_POST["classe"] ?? "");
$statutStage = trim($_POST["statut_stage"] ?? "");

$classesAutorisees = ["SIO1", "SIO2"];
$statutsAutorisees = ["Non commencé", "En recherche", "Candidature envoyée", "Entretien obtenu", "Stage trouvé"];

$erreurs = [];
$avertissements = [];

if (empty($nom)) {
    $erreurs[] = "Le nom est obligatoire.";
}
if (empty($prenom)) {
    $erreurs[] = "Le prénom est obligatoire.";
}

if (!is_numeric($age)) {
    $erreurs[] = "L'âge doit être un nombre.";
} elseif ($age <= 0) {
    $erreurs[] = "L'âge doit être un nombre positif.";
} elseif ($age < 16) {
    $erreurs[] = "L'étudiant(e) doit avoir au moins 16 ans.";
}

if (is_numeric($age) && $age > 65) {
    $avertissements[] = "Vérifiez l'âge saisi avant de poursuivre l'enregistrement.";
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erreurs[] = "L'adresse email n'est pas valide.";
} else {
    // Vérification de l'unicité, uniquement si l'email est valide,
    // et ICI, dans traitement.php, où $pdo et $email existent réellement
    $sqlVerification = "SELECT id FROM etudiant WHERE email = :email";
    $requeteVerification = $pdo->prepare($sqlVerification);
    $requeteVerification->execute(["email" => $email]);

    if ($requeteVerification->fetch()) {
        $erreurs[] = "Un étudiant possède déjà cette adresse électronique.";
    }
}

if (!in_array($classe, $classesAutorisees, true)) {
    $erreurs[] = "La classe sélectionnée est incorrecte.";
}
if (!in_array($statutStage, $statutsAutorisees, true)) {
    $erreurs[] = "Le statut de stage est incorrect.";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php if (!empty($erreurs)) { ?>
    <h1>Erreur dans le formulaire</h1>
    <ul>
        <?php foreach ($erreurs as $erreur) { ?>
            <li><?php echo htmlspecialchars($erreur); ?></li>
        <?php } ?>
    </ul>
    <p><a href="index.php">Retour au formulaire</a></p>

<?php } else { ?>

    <h1>Données reçues</h1>

    <?php foreach ($avertissements as $avertissement) { ?>
        <p style="color:orange;"><?php echo htmlspecialchars($avertissement); ?></p>
    <?php } ?>

    <p>Nom : <?php echo htmlspecialchars($nom); ?></p>
    <p>Prénom : <?php echo htmlspecialchars($prenom); ?></p>
    <p>Âge : <?php echo htmlspecialchars($age); ?></p>
    <p>Email : <?php echo htmlspecialchars($email); ?></p>
    <p>Classe : <?php echo htmlspecialchars($classe); ?></p>
    <p>Statut du stage : <?php echo htmlspecialchars($statutStage); ?></p>

    <?php
    $sql = "INSERT INTO etudiant (nom, prenom, age, email, classe, statut_stage)
            VALUES (:nom, :prenom, :age, :email, :classe, :statut_stage)";
    $requete = $pdo->prepare($sql);
    $requete->execute([
        "nom" => $nom,
        "prenom" => $prenom,
        "age" => $age,
        "email" => $email,
        "classe" => $classe,
        "statut_stage" => $statutStage
    ]);
    ?>

    <p><a href="liste.php">Voir les étudiants enregistrés</a></p>

<?php } ?>

</body>
</html>
