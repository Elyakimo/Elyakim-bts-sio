<?php 
header("Content-Type: application/json; charset=utf-8");
require_once "connexion.php";
$id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
if (!$id) {
    http_response_code(400);
    echo json_encode(["success" => false, "message" => "Identifiant invalide."]);
    exit;
}
$sql = "DELETE FROM etudiant WHERE id = :id";
$requete = $pdo->prepare($sql);
$requete->execute(["id" => $id]);
if ($requete->rowCount() === 0) {
    http_response_code(404);
    echo json_encode(["success" => false, "message" => "Etudiant introuvable."]);
    exit;
} echo json_encode([ "success" => true, "message" => "Etudiant supprimé."]);
