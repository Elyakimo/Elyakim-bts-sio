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

header("Content-Type: application/json");
echo json_encode($resultats);
?>