<?php
require '../model/database.php';
require '../model/user.php';

$user = new bet_user();
$user->id_user = $_SESSION['userInfo']->id_user;
$userProfil = $user->getUserProfil();

$player = new bet_user();
$playersList = $player->getPlayersList();


    