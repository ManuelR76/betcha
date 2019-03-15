<?php

require '../model/database.php';
require '../model/match.php';
require '../model/bet.php';

// on instancie un nouvel objet héritant de la class ranking
$bet = new bet_ranking();
// on récupère l'di user pour afficher les paris correspondants
$bet->id_user = $_SESSION['userInfo']->id_user;
// On instancie l'objet $betList qui est un tableau via la méthode displayBet
$betList = $bet->displayBet();

