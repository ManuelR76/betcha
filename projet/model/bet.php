<?php

/* on crée une class bet_ranking qui hérite de la class database via extends
 * La classe bet_ranking va nous permettre d'accéder à la table bet_ranking et afficher des élements
 */

class bet_ranking extends database {

    //création d'attributs qui correspondent à chacun des champs de la table bet_ranking
    // et on les initialise par rapport à leurs types.

    public $id_ranking;
    public $bet_team_a;
    public $bet_team_b;
    public $date_bet;
    public $points;
    public $wins;
    public $id_match;
    public $id_user;

//Méthode pour ajouter un pari
    public function addBet() {
        // Je stocke ma requête dans une variable
        $query = 'INSERT INTO `bet_ranking` (`bet_team_a`, `bet_team_b`, `date_bet`, `id_user`, `id_match`)'
                . 'VALUES (:bet_team_a, :bet_team_b, :date_bet, :id_user, :id_match)';
        //Je prépare ma requête
        $this->date_bet = date('Y-m-d H:i:s');
        $addBet = $this->DataBase->prepare($query);
        //Je bind mes values
        $addBet->bindValue(':bet_team_a', $this->bet_team_a, PDO::PARAM_INT);
        $addBet->bindValue(':bet_team_b', $this->bet_team_b, PDO::PARAM_INT);
        $addBet->bindValue(':date_bet', $this->date_bet, PDO::PARAM_STR);
        $addBet->bindValue(':id_user', $this->id_user, PDO::PARAM_INT);
        $addBet->bindValue(':id_match', $this->id_match, PDO::PARAM_INT);
        return $addBet->execute();
    }

    public function displayBet() {
        $query = 'SELECT `bet_ranking`.`id_ranking`, `bet_match`.`id_match`, `bet_match`.`team_a`, `bet_match`.`team_b`, '
                . 'DATE_FORMAT(`match_date`, "%d/%m/%Y") AS `date`,'
                . 'DATE_FORMAT(`match_date`, "%H:%i") AS `hour`, '
                . 'DATE_FORMAT(`date_bet`, "%d/%m/%Y") AS `dateBet`, '
                . 'DATE_FORMAT(`date_bet`, "%H:%i") AS `hourBet`, '
                . '`bet_ranking`.`bet_team_a`, `bet_ranking`.`bet_team_b` '
                . 'FROM `bet_ranking` '
                . 'INNER JOIN `bet_match` '
                . 'ON `bet_ranking`.`id_match` = `bet_match`.`id_match` '
                . 'WHERE `bet_ranking`.`id_user` = :id_user';
        $displayBet = $this->DataBase->prepare($query);
        $displayBet->bindValue(':id_user', $this->id_user, PDO::PARAM_INT);
        $displayBet->execute();
        return $displayBet->fetchAll(PDO::FETCH_OBJ);
    }

    public function checkBet() {
        $query = 'SELECT * FROM `bet_ranking` '
                . 'WHERE `id_match` = :id_match AND `id_user` = :id_user';
        $checkSingleBet = $this->DataBase->prepare($query);
        $checkSingleBet->bindValue(':id_match', $this->id_match, PDO::PARAM_INT);
        $checkSingleBet->bindValue(':id_user', $this->id_user, PDO::PARAM_INT);
        $checkSingleBet->execute();
        if ($checkSingleBet->rowCount() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function getSingleBet() {
        $query = 'SELECT `bet_ranking`.`id_ranking`, `bet_match`.`id_match`, `bet_match`.`team_a`, `bet_match`.`team_b`, '
                . 'DATE_FORMAT(`match_date`, "%d/%m/%Y") AS `date`,'
                . 'DATE_FORMAT(`match_date`, "%H:%i") AS `hour`, '
                . 'DATE_FORMAT(`date_bet`, "%d/%m/%Y") AS `dateBet`, '
                . 'DATE_FORMAT(`date_bet`, "%H:%i") AS `hourBet`, '
                . '`bet_ranking`.`bet_team_a`, `bet_ranking`.`bet_team_b` '
                . 'FROM `bet_ranking` '
                . 'INNER JOIN `bet_match` '
                . 'ON `bet_ranking`.`id_match` = `bet_match`.`id_match` '
                . 'WHERE `bet_ranking`.`id_ranking` = :id_ranking';
        $getSingleBet = $this->DataBase->prepare($query);
        $getSingleBet->bindValue(':id_ranking', $this->id_ranking, PDO::PARAM_INT);
        $getSingleBet->execute();
        return $getSingleBet->fetch(PDO::FETCH_OBJ);
    }

    public function updateBet() {
        $query = 'UPDATE `bet_ranking` SET '
                . '`bet_team_a` = :bet_team_a, '
                . '`bet_team_b` = :bet_team_b, '
                . '`date_bet` = :date_bet '
                . 'WHERE `id_ranking` = :id_ranking';
        $this->date_bet = date('Y-m-d H:i:s');
        $updateBet = $this->DataBase->prepare($query);
        $updateBet->bindValue(':bet_team_a', $this->bet_team_a, PDO::PARAM_INT);
        $updateBet->bindValue(':bet_team_b', $this->bet_team_b, PDO::PARAM_INT);
        $updateBet->bindValue(':date_bet', $this->date_bet, PDO::PARAM_STR);
        $updateBet->bindValue(':id_ranking', $this->id_ranking, PDO::PARAM_INT);
        return $updateBet->execute();
    }
    
    

}
