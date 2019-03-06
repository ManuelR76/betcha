<?php

require '../model/database.php';
require '../model/user.php';

$user = new bet_user();

if (isset($_POST['removeConfirmation'])) {
    $user->id_user = $_SESSION['userInfo']->id_user;
//appel de la méthode deleteUser() permettant la suppression d'un utilisateur
    $user->deleteUserProfil();
    session_unset();
// Pour finir, je redirige l'utilisateur vers la même page
    session_destroy();
    header('Location: signup.php');
    exit();
}
      