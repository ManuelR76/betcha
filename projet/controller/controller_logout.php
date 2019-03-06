<?php
if(isset($_POST['logoutButton'])) {
// Pour me déconnecter, je démarre une session
session_unset();
// Pour finir, je redirige l'utilisateur vers la connexion l'index
session_destroy();
header('Location: signin.php');
exit();
}

    