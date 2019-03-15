<?php

require '../model/database.php';
require '../model/match.php';
require '../model/bet.php';

// On instancie l'objet qui aura comme class match.
$match = new bet_match();
// On instancie l'objet $matchsList qui est un tableau via la méthode getMatchsList
$matchsList = $match->displayRemainingBet();
//j'instancie un nouvel objet ranking héritant de la classe bet 
$bet = new bet_ranking();
//on déclare un tableau errorsArray qui contiendra les messages d'erreurs 
$errorsArray = [];
//on déclare le formulaire par défaut en false
$addBetSuccess = false;

// on crée une regex qui n'accepte que les chiffres supérieurs ou égales à 0
$regexBet = '/^[0-9]+$/';
// création de la boucle pour vérifier tous les matchs
foreach ($matchsList AS $matchs) {
    // si mon post n'est pas vide
    if (isset($_POST['submitBet' . $matchs->id_match])) {
        // si mon post équipe A n'est pas vide
        if (isset($_POST['bet_team_a' . $matchs->id_match])) {
            // on stocke son contenu dans le paramètre de l'objet ayant appelé la méthode en supprimant les caractères html 
            $bet->bet_team_a = htmlspecialchars($_POST['bet_team_a' . $matchs->id_match]);
            // on permet au score 0 d'être valable
            if ($bet->bet_team_a == 0) {
                $resultValid = TRUE;
            }
            // on vérifie que le champs n'est pas vide
            if (empty($bet->bet_team_a) && !$resultValid) {
                $errorsArray['bet_team_a' . $matchs->id_match] = 'Champs vide';
            } else {
                //on test si les regex sont bonnes 
                if (!preg_match($regexBet, $bet->bet_team_a)) {
                    $errorsArray['bet_team_a' . $matchs->id_match] = 'Saisie de score incorrecte';
                }
            }
        }
        // si mon post équipe B n'est pas vide
        if (isset($_POST['bet_team_b' . $matchs->id_match])) {
            // on stocke son contenu dans le paramètre de l'objet ayant appelé la méthode en supprimant les caractères html 
            $bet->bet_team_b = htmlspecialchars($_POST['bet_team_b' . $matchs->id_match]);
            // on permet au score 0 d'être valable
            if ($bet->bet_team_b == 0) {
                $resultValid = TRUE;
            }
            // on vérifie que le champs n'est pas vide
            if (empty($bet->bet_team_b) && !$resultValid) {
                $errorsArray['bet_team_b' . $matchs->id_match] = 'Champs vide';
            } else {
                //on test si les regex sont bonnes 
                if (!preg_match($regexBet, $bet->bet_team_b)) {
                    $errorsArray['bet_team_b' . $matchs->id_match] = 'Saisie de score incorrecte';
                }
            }
        }
        // si tous les champs sont valables
        if (!isset($errorsArray['bet_team_a' . $matchs->id_match]) && !isset($errorsArray['bet_team_b' . $matchs->id_match])) {
            $bet->id_match = $matchs->id_match;
            // on recupère l'id user
            $bet->id_user = $_SESSION['userInfo']->id_user;
            // je lance la méthode addBet qui ajoute un pari
            $bet->addBet();
            // j'affiche les paris restant
            $matchsList = $match->displayRemainingBet();
            // je déclare addBetSuccess en true pour afficher mon message
            $addBetSuccess = true;
            }
        }
    }








        