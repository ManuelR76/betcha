<?php
require '../model/database.php';
require '../model/bet.php';
// On instancie l'objet qui aura comme class ranking.
$bet = new bet_ranking();
// On déclare le suppression par défaut en false
$deleteBetSuccess = false;
// Si j'ai bien appuyé sur le bouton pour supprimer
if (isset($_POST['removeBetConfirmation'])) {
    // Je récupère l'id du pari avec la méthode GET
    $bet->id_ranking = $_GET['id'];
    // Je lance la méthode deleteBet pour supprimer un pari
    $bet->deleteBet();
    // La suppression passe en true et me permet d'afficher un message
    $deleteBetSuccess = true;
    // Redirection vers la liste des paris
    header('Location: bet_list.php');
    exit();
}
// Vérification de la présence de l'id
if (isset($_GET['id'])) {
    $bet->id_ranking = $_GET['id'];
    $betProfil = $bet->getSingleBet();
    if ($betProfil === false) {
        $idExist = false;
    } else {
        $idExist = true;
    }
}

