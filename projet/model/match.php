<?php

/* on crée une class bet_match qui hérite de la class database via extends
 * La classe bet_match va nous permettre d'accéder à la table bet_match et afficher des élements
 */

class bet_match extends database {

    //création d'attributs qui correspondent à chacun des champs de la table bet_match
    // et on les initialise par rapport à leurs types.
    
    public $id_match;
    public $team_a;
    public $team_b;
    public $tournament;
    public $match_date;
    public $score_team_a;
    public $score_team_b;
    public $match_played;

//Méthode pour afficher les matchs
    public function getMatchsList(){
        // On met notre requète dans la variable $query qui selectionne tous les champs de la table bet_match
        $query = 'SELECT `id_match`, `team_a`, `team_b`, `tournament`,'
                . ' DATE_FORMAT(`match_date`, "%d/%m/%Y") AS `date`,'
                . ' DATE_FORMAT(`match_date`, "%H:%i") AS `hour`, `score_team_a`, `score_team_b`  FROM `bet_match` ORDER BY `id_match`';
        // On crée un objet $result qui exécute la méthode query() avec comme paramètre $query
        $result = $this->DataBase->query($query);
        // On crée un objet $matchsList qui est un tableau.
        // La fonction fetchAll permet d'afficher toutes les données de la requète dans un tableau d'objet via le paramètre (PDO::FETCH_OBJ)
        $matchsList = $result->fetchAll(PDO::FETCH_OBJ);
        // On retourne le resultat
        return $matchsList;
    }
    
        public function displayRemainingBet() {
        // On met notre requète dans la variable $query qui selectionne tous les champs de la table bet_match
        $query = 'SELECT `bet_match`.`id_match`, `team_a`, `team_b`, `tournament`, '
                . 'DATE_FORMAT(`match_date`, "%d/%m/%Y") AS `date`, '
                . 'DATE_FORMAT(`match_date`, "%H:%i") AS `hour`, `score_team_a`, `score_team_b` '
                . 'FROM `bet_match` '
                . 'WHERE NOT EXISTS '
                . '(SELECT `bet_ranking`.`id_match` FROM `bet_ranking` '
                . 'INNER JOIN `bet_user` ON `bet_ranking`.`id_user` = `bet_user`.`id_user` '
                . 'WHERE `bet_match`.`id_match` = bet_ranking.id_match '
                . 'AND `bet_ranking`.`id_user` = :id_user) '
                . 'ORDER BY `id_match` ';
        // On crée un objet $result qui exécute la méthode query() avec comme paramètre $query
        $result = $this->DataBase->prepare($query);
        $result->execute(array(
            "id_user" => $_SESSION['userInfo']->id_user
        ));
        // On crée un objet $matchsList qui est un tableau.
        // La fonction fetchAll permet d'afficher toutes les données de la requète dans un tableau d'objet via le paramètre (PDO::FETCH_OBJ)
        $matchsList = $result->fetchAll(PDO::FETCH_OBJ);
        // On retourne le resultat
        return $matchsList;
    }
}


