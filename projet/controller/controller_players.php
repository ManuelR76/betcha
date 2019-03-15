<?php
require '../model/database.php';
require '../model/user.php';

$player = new bet_user();
$playersList = $player->getPlayersList();

