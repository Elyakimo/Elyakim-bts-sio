<?php
require_once "connexion.php";

$recherche = trim($_GET["q"] ?? "");

$resultats = [];

if ($recherche !== "") {
    $sql = "
        SELECT id, nom, prenom, age, email, classe, statut_stage, date_creation
        FROM etudiant
        WHERE nom ILIKE :recherche
           OR prenom ILIKE :recherche
           OR classe ILIKE :recherche
        ORDER BY nom, prenom
    ";

    $requete = $pdo->prepare($sql);

    $requete->execute([
        "recherche" => "%" . $recherche . "%"
    ]);

    $resultats = $requete->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultats de recherche</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Résultats de recherche</h1>

    <form method="GET" action="recherche.php">
        <label for="q">Rechercher :</label>
        <input
            type="search"
            id="q"
            name="q"
            value="<?php echo htmlspecialchars($recherche); ?>"
            placeholder="Nom, prénom ou classe"
        >
        <button type="submit">Rechercher</button>
    </form>

    <?php if ($recherche === "") { ?>

        <p>Veuillez saisir un terme de recherche.</p>

    <?php } elseif (count($resultats) === 0) { ?>

        <p>Aucun étudiant trouvé pour « <?php echo htmlspecialchars($recherche); ?> ».</p>

    <?php } else { ?>

        <p><?php echo count($resultats); ?> résultat(s) trouvé(s) pour « <?php echo htmlspecialchars($recherche); ?> »</p>

        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Âge</th>
                    <th>Classe</th>
                    <th>Statut stage</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultats as $etudiant) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($etudiant["nom"]); ?></td>
                        <td><?php echo htmlspecialchars($etudiant["prenom"]); ?></td>
                        <td><?php echo htmlspecialchars($etudiant["age"]); ?></td>
                        <td><?php echo htmlspecialchars($etudiant["classe"]); ?></td>
                        <td><?php echo htmlspecialchars($etudiant["statut_stage"]); ?></td>
                        <td><?php echo htmlspecialchars($etudiant["email"]); ?></td>
                        <td>
                            <button type="button" class="btn-supprimer" data-id="<?= (int) $etudiant["id"] ?>">Supprimer</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    <?php } ?>

    <p><a href="liste.php">← Retour à la liste</a></p>

</body>
<script src="assets/js/liste.js"></script>
</html>
