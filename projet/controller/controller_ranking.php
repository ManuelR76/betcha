<?php
require '../model/database.php';
require '../model/bet.php';

$player = new bet_ranking();
$playersListForRanking = $player->getPlayersListForRanking();

