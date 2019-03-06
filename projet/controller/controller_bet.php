<?php

require '../model/database.php';
require '../model/match.php';
require '../model/bet.php';

// On instancie l'objet clients qui aura comme classe match.
$match = new bet_match();
// On instancie l'objet $matchsList qui est un tableau via la méthode getMatchsList
$matchsList = $match->displayRemainingBet();
//j'instancie un nouvel objet ranking héritant de la classe bet 
$bet = new bet_ranking();
//on déclare un tableau errorsArray qui contiendra les messages d'erreurs 
$errorsArray = [];
//on déclare le formulaire par défaut en false
$addBetSuccess = false;

// on crée les regex
$regexBet = '/^[0-9]{1}+$/';

foreach ($matchsList AS $matchs) {
    if (isset($_POST['submitBet' . $matchs->id_match])) {
        if (isset($_POST['bet_team_a' . $matchs->id_match])) {
            $bet->bet_team_a = htmlspecialchars($_POST['bet_team_a' . $matchs->id_match]);
            if ($bet->bet_team_a == 0) {
                $resultValid = TRUE;
            }
            if (empty($bet->bet_team_a) && !$resultValid) {
                $errorsArray['bet_team_a' . $matchs->id_match] = 'Champs vide';
            } else {
                //on test si les regex sont bonnes 
                if (!preg_match($regexBet, $bet->bet_team_a)) {
                    $errorsArray['bet_team_a' . $matchs->id_match] = 'Saisie de score incorrecte';
                }
            }
        }

        if (isset($_POST['bet_team_b' . $matchs->id_match])) {
            $bet->bet_team_b = htmlspecialchars($_POST['bet_team_b' . $matchs->id_match]);
            //on test si les regex sont bonnes 
            if ($bet->bet_team_b == 0) {
                $resultValid = TRUE;
            }
            if (empty($bet->bet_team_b) && !$resultValid) {
                $errorsArray['bet_team_b' . $matchs->id_match] = 'Champs vide';
            } else {
                if (!preg_match($regexBet, $bet->bet_team_b)) {
                    $errorsArray['bet_team_b' . $matchs->id_match] = 'Saisie de score incorrecte';
                }
            }
        }
        if (!isset($errorsArray['bet_team_a' . $matchs->id_match]) && !isset($errorsArray['bet_team_b' . $matchs->id_match])) {
            $bet->id_match = $matchs->id_match;
            $bet->id_user = $_SESSION['userInfo']->id_user;
            $betArray = $bet->checkBet();
            // lancement de la méthode pour vérifier le pari existant
            if ($betArray) { // si le pari existe déjà on envoit un modal d'erreur
                $errorsArray['bet_team_a' . $matchs->id_match] = 'Vous avez déjà parié sur ce match';
            } else {
                $bet->addBet();
                $matchsList = $match->getMatchsList();
                $addBetSuccess = true;
            }
        }
    }
}






        