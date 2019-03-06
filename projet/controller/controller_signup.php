<?php

require '../model/database.php';
require '../model/user.php';
// j'instancie un nouvel objet users héritant de la classe user 
$user = new bet_user();
//on déclare un tableau errorsArray qui contiendra les messages d'erreurs 
$errorsArray = [];
//on déclare le formulaire par défaut en false
$addSuccess = false;

// on crée les regex
$regexName = '/^[a-zA-Z-Ä-ÿ\- ]+$/';
$regexAlias = '/^[a-zA-Z-Ä-ÿ0-9\-_. ]+$/';
$regexEmail = '/^[a-z0-9.-]+@[a-z0-9.-]+.[a-z]{2,6}$/';
$regexPassword = '/^.{6,}+$/';
if (isset($_POST['lastname'])) {
    $user->lastname = htmlspecialchars($_POST['lastname']);
//on test si les regex sont bonnes 
    if (!preg_match($regexName, $user->lastname)) {
        $errorsArray['lastname'] = 'Saisie de nom incorrecte';
    }
//on teste si l'input est vide
    if (empty($user->lastname)) {
        $errorsArray['lastname'] = 'Veuillez saisir un nom';
    }
}
if (isset($_POST['firstname'])) {
    $user->firstname = htmlspecialchars($_POST['firstname']);
//on test si les regex sont bonnes 
    if (!preg_match($regexName, $user->firstname)) {
        $errorsArray['firstname'] = 'Saisie de prénom incorrecte';
    }
//on teste si l'input est vide
    if (empty($user->firstname)) {
        $errorsArray['firstname'] = 'Veuillez saisir un prénom';
    }
}
if (isset($_POST['alias'])) {
    $user->alias = htmlspecialchars($_POST['alias']);
//on test si les regex sont bonnes 
    if (!preg_match($regexAlias, $user->alias)) {
        $errorsArray['alias'] = 'Saisie de pseudonyme incorrecte';
    }
//on teste si l'input est vide
    if (empty($user->alias)) {
        $errorsArray['alias'] = 'Veuillez saisir un pseudonyme';
    }
}
if (isset($_POST['email'])) {
    $user->email = htmlspecialchars($_POST['email']);
//on test si les regex sont bonnes 
    if (!preg_match($regexEmail, $user->email)) {
        $errorsArray['email'] = 'Format email incorrect';
    }
//on teste si l'input est vide
    if (empty($user->email)) {
        $errorsArray['email'] = 'Veuillez saisir un email';
    }
}
if (isset($_POST['password'])) {
    $user->password = htmlspecialchars($_POST['password']);
//on test si les regex sont bonnes 
    if (!preg_match($regexPassword, $user->password)) {
        $errorsArray['password'] = 'Votre mot de passe doit comporter au moins 6 caractères';
    }
//on teste si l'input est vide
    if (empty($user->password)) {
        $errorsArray['password'] = 'Veuillez saisir un mot de passe';
    }
}

//on vérifie le mot de passe
if (isset($_POST['confirmPassword'])) {
    $confirmPassword = htmlspecialchars($_POST['confirmPassword']);
    if (empty($confirmPassword)) {
        $errorsArray['confirmPassword'] = 'Veuillez confirmer le mot de passe';
    }
    if ($_POST['password'] === $_POST['confirmPassword']) {
        // Si cela correspond, on hash le password (crypte)
        $user->password = password_hash($_POST['confirmPassword'], PASSWORD_DEFAULT);
    } else {
        // Sinon j'affiche un message d'erreur
        $errorsArray['confirmPassword'] = 'Les mots de passe ne sont pas identiques';
    }
}
//on verifie si au moment de soumettre le formulaire il n'y a pas d'erreurs
if (isset($_POST['submit']) && count($errorsArray) == 0) {
//si le formulaire est correct on ajoute à la base de donnée l'utilisateur    
    $user->addUser();
    $addSuccess = true;
}

?>