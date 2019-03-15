<?php

/* on crée une class bet_user qui hérite de la class database via extends
 * La classe bet_user va nous permettre d'accéder à la table bet_user et afficher des élements
 */

class bet_user extends database {

    //création d'attributs qui correspondent à chacun des champs de la table bet_user
    // et on les initialise par rapport à leurs types.


    public $id_user;
    public $lastname;
    public $firstname;
    public $alias;
    public $email;
    public $password;

//Méthode pour ajouter un utilisateur
    public function addUser() {
        // Je stocke ma requête dans une variable
        $query = 'INSERT INTO `bet_user` (`lastname`, `firstname`, `alias`, `email`, `password`)'
                . ' VALUES (:lastname, :firstname, :alias, :email, :password)';
        //Je prépare ma requête
        $addUser = $this->DataBase->prepare($query);
        //Je bind mes values
        $addUser->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $addUser->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $addUser->bindValue(':alias', $this->alias, PDO::PARAM_STR);
        $addUser->bindValue(':email', $this->email, PDO::PARAM_STR);
        $addUser->bindValue(':password', $this->password, PDO::PARAM_STR);
        return $addUser->execute();
    }

    // Méthode qui va permettre de vérifier si le pseudo et l'email n'hésitent pas
//    public function checkSingleInput() {
//        // Je crée une variable pour avoir un résultat de requête en boolean initialisé a false
//        $querySingleInput = false;
//        // Je mets en place ma requête de vérification
//        $query = 'SELECT COUNT(*) AS `singleInput` FROM `bet_user` WHERE `alias` = :alias, `email` = :email';
//        // J'insert ma requête dans une variable en récupérant les attributs du parent
//        $checkSingleInput = $this->DataBase->prepare($query);
//        // J'attribue les valeurs via bindValue et je récupère les attributs de la classe via $this
//        $checkSingleInput->bindValue(':alias', $this->alias, PDO::PARAM_STR);
//        $checkSingleInput->bindValue(':email', $this->email, PDO::PARAM_STR);
//        $querySingleInput = $checkSingleInput->fetch(PDO::FETCH_OBJ);
//        return $querySingleInput->execute();
//    }
    // Méthode qui va permettre de récupérer le profil grâce à l'email
    public function getUserByMail() {
        // Je stocke ma requête dans une variable 
        $query = 'SELECT `id_user`, `email`, `password`'
                . ' FROM `bet_user`'
                . ' WHERE `email` LIKE :email';
        // Je prépare ma requête 
        $getUserProfil = $this->DataBase->prepare($query);
        // Je bind mes values 
        $getUserProfil->bindValue(':email', $this->email, PDO::PARAM_STR);
        $getUserProfil->execute();
        if ($getUserProfil->rowCount() == 1) {
            return $getUserProfil->fetch(PDO::FETCH_OBJ);
        } else {
            return FALSE;
        }
    }

    public function getUserProfil() {
        $query = 'SELECT `id_user`, `lastname`, `firstname`, `alias`, `email`'
                . ' FROM `bet_user`'
                . ' WHERE `id_user` = :id_user ';
        $getUserProfil = $this->DataBase->prepare($query);
        $getUserProfil->bindValue(':id_user', $this->id_user, PDO::PARAM_INT);
        $getUserProfil->execute();
        return $getUserProfil->fetch(PDO::FETCH_OBJ);
    }

    public function updateUserProfil() {
        $query = 'UPDATE `bet_user` SET '
                . ' `lastname` = :lastname,'
                . ' `firstname` = :firstname,'
                . ' `alias` = :alias,'
                . ' `email` = :email'
                . ' WHERE `id_user` = :id_user';
        $updateUserProfil = $this->DataBase->prepare($query);
        $updateUserProfil->bindValue(':id_user', $this->id_user, PDO::PARAM_INT);
        $updateUserProfil->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $updateUserProfil->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $updateUserProfil->bindValue(':alias', $this->alias, PDO::PARAM_STR);
        $updateUserProfil->bindValue(':email', $this->email, PDO::PARAM_STR);
        return $updateUserProfil->execute();
    }

//       Méthode qui va permettre de vérifier si le pseudo et l'email n'hésitent pas

//    public function checkPassword() {
//        // Je crée une variable pour avoir un résultat de requête en boolean initialisé a false
//        $querySingleInput = false;
//        // Je mets en place ma requête de vérification
//        $query = 'SELECT COUNT(*) AS `singleInput` FROM `bet_user` WHERE `alias` = :alias, `email` = :email';
//        // J'insert ma requête dans une variable en récupérant les attributs du parent
//        $checkSingleInput = $this->DataBase->prepare($query);
//        // J'attribue les valeurs via bindValue et je récupère les attributs de la classe via $this
//        $checkSingleInput->bindValue(':alias', $this->alias, PDO::PARAM_STR);
//        $checkSingleInput->bindValue(':email', $this->email, PDO::PARAM_STR);
//        $querySingleInput = $checkSingleInput->fetch(PDO::FETCH_OBJ);
//        return $querySingleInput->execute();
//    }

//     public function updatePassword() {
//        $query = 'UPDATE `bet_user` SET '
//                . '`lastname` = :lastname,'
//                . ' `firstname` = :firstname,'
//                . ' `alias` = :alias,'
//                . ' `email` = :email'
//                . ' WHERE `id_user` = :id_user';
//        $updateUserProfil = $this->DataBase->prepare($query);
//        $updateUserProfil->bindValue(':id_user', $this->id_user, PDO::PARAM_INT);
//        $updateUserProfil->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
//        $updateUserProfil->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
//        $updateUserProfil->bindValue(':alias', $this->alias, PDO::PARAM_STR);
//        $updateUserProfil->bindValue(':email', $this->email, PDO::PARAM_STR);
//        return $updateUserProfil->execute();        
//    } 

    public function deleteUserProfil() {
        $query = 'DELETE FROM `bet_user`'
                . ' WHERE `id_user` = :id_user ';
        $deleteUserProfil = $this->DataBase->prepare($query);
        $deleteUserProfil->bindValue(':id_user', $this->id_user, PDO::PARAM_INT);
        return $deleteUserProfil->execute();
    }

    public function getPlayersList() {
        $query = 'SELECT * '
                . 'FROM `bet_user` '
                . 'ORDER BY `lastname`';
        $result = $this->DataBase->query($query);
        $data = $result->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

}
