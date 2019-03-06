<?php
require '../model/database.php';
require '../model/match.php';
require '../model/bet.php';

$bet = new bet_ranking();
$bet->id_user = $_SESSION['userInfo']->id_user;
//on déclare un tableau errorsArray qui contiendra les messages d'erreurs 
$errorsArray = [];
//on déclare le formulaire par défaut en false
$updateBetSuccess = false;

// on crée les regex
$regexBet = '/^[0-9]{1}+$/';

if (isset($_POST['updateBet'])) {
    if (isset($_POST['bet_team_a'])) {
        $bet->bet_team_a = htmlspecialchars($_POST['bet_team_a']);
        if ($bet->bet_team_a == 0) {
            $resultValid = TRUE;
        }
        if (empty($bet->bet_team_a) && !$resultValid) {
            $errorsArray['bet_team_a'] = 'Champs vide';
        } else {
//on test si les regex sont bonnes 
            if (!preg_match($regexBet, $bet->bet_team_a)) {
                $errorsArray['bet_team_a'] = 'Saisie de score incorrecte';
            }
        }
    }

    if (isset($_POST['bet_team_b'])) {
        $bet->bet_team_b = htmlspecialchars($_POST['bet_team_b']);
//on test si les regex sont bonnes 
        if ($bet->bet_team_b == 0) {
            $resultValid = TRUE;
        }
        if (empty($bet->bet_team_b) && !$resultValid) {
            $errorsArray['bet_team_b'] = 'Champs vide';
        } else {
            if (!preg_match($regexBet, $bet->bet_team_b)) {
                $errorsArray['bet_team_b'] = 'Saisie de score incorrecte';
            }
        }
    }
    if (!isset($errorsArray['bet_team_a']) && !isset($errorsArray['bet_team_b'])) {
        $bet->id_ranking = $_GET['id'];
        $bet->updateBet();
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