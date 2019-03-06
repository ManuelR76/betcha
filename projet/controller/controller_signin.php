<?php

require '../model/database.php';
require '../model/user.php';

$user = new bet_user();
// J'instancie un nouvel objet user héritant de la classe user 
$errorsArray = [];
// J'initialise mon tableau d'erreur formError à vide 
//regex pour vérifier format email
//$connexionSuccess = false;

$regexEmail = '/^[a-z0-9.-]+@[a-z0-9.-]+.[a-z]{2,6}$/';

if (isset($_POST['submit'])) {
    // Si mon POST email n'est pas vide
    if (!empty($_POST['email'])) {
        // Je stocke son contenu dans le paramètre de l'objet ayant appelé la méthode en supprimant les caractères html 
        $user->email = htmlspecialchars($_POST['email']);
        
    } else {
        // S'il est vide 
        $errorsArray['email'] = 'Le mail est nécessaire pour se connecter';
    }
    if (!preg_match($regexEmail, $user->email)) {
        $errorsArray['email'] = 'Format email incorrect';
    }
    // Si mon POST password n'est pas vide 
    if (!empty($_POST['password'])) {
        // Je stocke son contenu dans le paramètre de l'objet ayant appelé la méthode en prenant soin de supprimer les caractères html 
        $user->password = htmlspecialchars($_POST['password']);
    } else {
        // S'il est vide 
        $errorsArray['password'] = 'Le mot de passe est nécessaire pour se connecter';
    }
}
if (isset($_POST['submit'])) {
    if (count($errorsArray) == 0) {
        $userProfil = $user->getUserByMail();
        if ($userProfil && $userProfil->email == $_POST['email']) {
            //Compare ce que $_POST du formulaire avec la base de donnée
            if (password_verify($_POST['password'], $userProfil->password)) {
                $user->id_user = $userProfil->id_user;
                $userInfo = $user->getUserProfil();
                // Je remplis mes variables de session 
                $_SESSION['userInfo'] = $userInfo;             
                header('location: home.php');
                exit();
            } else {
                // Si l'identifiant est incorrect, je donne un minimum d'infos à un potentiel attaquant 
                $errorsArray['login'] = 'Mauvaise adresse mail ou mot de passe';
            }
        } else {
            // Si le mot de passe est incorrect, je donne un minimum d'infos à un potentiel attaquant 
            $errorsArray['login'] = 'Mauvaise adresse mail ou mot de passe';
        }
    }
}

