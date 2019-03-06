<?php

require '../model/database.php';
require '../model/match.php';
require '../model/bet.php';

// On instancie l'objet clients qui aura comme classe match.
$match = new bet_match();
// On instancie l'objet $matchsList qui est un tableau via la méthode getMatchsList
$matchsList = $match->getMatchsList();
//j'instancie un nouvel objet users héritant de la classe bet 


