<?php

require '../model/database.php';
require '../model/match.php';
require '../model/bet.php';

$bet = new bet_ranking();
$bet->id_user = $_SESSION['userInfo']->id_user;
$betList = $bet->displayBet();

