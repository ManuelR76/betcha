<?php
require '../model/database.php';
require '../model/match.php';
require '../model/bet.php';
// On instancie l'objet qui aura comme class ranking.
$bet = new bet_ranking();
// on récupère l'id de l'utilisateur
$bet->id_user = $_SESSION['userInfo']->id_user;
//on déclare un tableau errorsArray qui contiendra les messages d'erreurs 
$errorsArray = [];
//on déclare le formulaire par défaut en false
$updateBetSuccess = false;

// on crée les regex
$regexBet = '/^[0-9]+$/';
// si mon post n'est pas vide
if (isset($_POST['updateBet'])) {
    // si mon post équipe A n'est pas vide
    if (isset($_POST['bet_team_a'])) {
        // on stocke son contenu dans le paramètre de l'objet ayant appelé la méthode en supprimant les caractères html 
        $bet->bet_team_a = htmlspecialchars($_POST['bet_team_a']);
        // on permet au score 0 d'être valable
        if ($bet->bet_team_a == 0) {
            $resultValid = TRUE;
        }
        // on vérifie que le champs n'est pas vide
        if (empty($bet->bet_team_a) && !$resultValid) {
            $errorsArray['bet_team_a'] = 'Champs vide';
        } else {
            //on test si les regex sont bonnes 
            if (!preg_match($regexBet, $bet->bet_team_a)) {
                $errorsArray['bet_team_a'] = 'Saisie de score incorrecte';
            }
        }
    }
    // si mon post équipe B n'est pas vide
    if (isset($_POST['bet_team_b'])) {
        $bet->bet_team_b = htmlspecialchars($_POST['bet_team_b']);
        // on permet au score 0 d'être valable
        if ($bet->bet_team_b == 0) {
            $resultValid = TRUE;
        }
        // on vérifie que le champs n'est pas vide
        if (empty($bet->bet_team_b) && !$resultValid) {
            $errorsArray['bet_team_b'] = 'Champs vide';
        } else {
            //on test si les regex sont bonnes
            if (!preg_match($regexBet, $bet->bet_team_b)) {
                $errorsArray['bet_team_b'] = 'Saisie de score incorrecte';
            }
        }
    }
    // si tous les champs sont valables
    if (!isset($errorsArray['bet_team_a']) && !isset($errorsArray['bet_team_b'])) {
        // on recupère l'id du pari correspondant
        $bet->id_ranking = $_GET['id'];
        // je lance la méthode updateBet qui mettre à jour un pari
        $bet->updateBet();
        // je déclare updateBetSuccess en true pour afficher mon message dans ma view
        $updateBetSuccess = true;
    }
}
 
if (isset($_GET['id'])) {
    $bet->id_ranking = $_GET['id'];
    $betProfil = $bet->getSingleBet();
    if ($betProfil === false) {
        $idExist = false;
    } else {
        $idExist = true;
    }
}