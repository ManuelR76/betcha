<?php

//on crée une class database
class database {

    //on crée un attribut $DataBase qui sera disponible dans ses enfants car on la mis en public
    public $DataBase;

    //on crée la méthode magique __construct pour se connecter à la base de donnée mySQL
    public function __construct() {
        //on essaye de se connecter en instanciant un nouvelle objet PDO
        try {
            $this->DataBase = new PDO('mysql:host=localhost;dbname=betcha;charset=utf8', 'betcha', 'betcha', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            //si erreur, on saisie l'exception puis on la stocke dans $e et on arrête le script PHP.
        } catch (Exception $errorMessage) {
            die('Erreur : ' . $errorMessage->getMessage()); //on affiche le message d'erreur avec la methode getMessage;
        }
    }

    //on crée la méthode magique __destruct qui nous permet de nous déconnecter de la base de donnée
    public function __destruct() {
        $this->DataBase = NULL;
    }

}
