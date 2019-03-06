<?php
//On appelle les controleurs permettant d'utiliser la class "database" et la classe "user"
require '../model/database.php';
require '../model/user.php';
//On instancie un nouvel objet $player comme class user
$player = new bet_user();
//J'execute ma méthode qui me permet de retourner la liste des participants
$playersList = $player->getPlayersList();

