#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: bet_user
#------------------------------------------------------------

CREATE TABLE bet_user(
        id_user   Int  Auto_increment  NOT NULL ,
        lastname  Varchar (255) NOT NULL ,
        firstname Varchar (255) NOT NULL ,
        alias     Varchar (255) NOT NULL ,
        email     Varchar (255) NOT NULL ,
        Password  Varchar (255) NOT NULL
	,CONSTRAINT bet_user_PK PRIMARY KEY (id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: bet_match
#------------------------------------------------------------

CREATE TABLE bet_match(
        id_match     Int  Auto_increment  NOT NULL ,
        team_a       Varchar (255) NOT NULL ,
        team_b       Varchar (255) NOT NULL ,
        tournament   Varchar (20) NOT NULL ,
        match_date   Datetime NOT NULL ,
        score_team_a Int  NULL ,
        score_team_b Int  NULL ,
        match_played Bool  NULL
	,CONSTRAINT bet_match_PK PRIMARY KEY (id_match)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: bet_ranking
#------------------------------------------------------------

CREATE TABLE bet_ranking(
        id_ranking Int  Auto_increment  NOT NULL ,
        bet_team_a Int NOT NULL ,
        bet_team_b Int NOT NULL ,
        date_bet   Date NOT NULL ,
        points     Int NOT NULL ,
        wins       Bool NOT NULL ,
        id_match   Int NOT NULL ,
        id_user    Int NOT NULL
	,CONSTRAINT bet_ranking_PK PRIMARY KEY (id_ranking)

	,CONSTRAINT bet_ranking_bet_match_FK FOREIGN KEY (id_match) REFERENCES bet_match(id_match)
	,CONSTRAINT bet_ranking_bet_user0_FK FOREIGN KEY (id_user) REFERENCES bet_user(id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: bet_additional
#------------------------------------------------------------

CREATE TABLE bet_additional(
        id_additional Int  Auto_increment  NOT NULL ,
        path_picture  Varchar (255) ,
        id_user       Int NOT NULL
	,CONSTRAINT bet_additional_PK PRIMARY KEY (id_additional)

	,CONSTRAINT bet_additional_bet_user_FK FOREIGN KEY (id_user) REFERENCES bet_user(id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: bet_comment
#------------------------------------------------------------

CREATE TABLE bet_comment(
        id_comment Int  Auto_increment  NOT NULL ,
        comment    Varchar (255) ,
        id_user    Int NOT NULL
	,CONSTRAINT bet_comment_PK PRIMARY KEY (id_comment)

	,CONSTRAINT bet_comment_bet_user_FK FOREIGN KEY (id_user) REFERENCES bet_user(id_user)
)ENGINE=InnoDB;

INSERT INTO `bet_match`(`id_match`, `team_a`, `team_b`, `tournament`, `match_date`) VALUES 
			('1', 'AS ROMA', 'FC PORTO', '8ème Aller', '2019-02-12 21:00:00'),
                        ('2', 'MANCHESTER UNITED', 'PSG', '8ème Aller', '2019-02-12 21:00:00'),
                        ('3', 'TOTTENHAM', 'DORTMUND', '8ème Aller', '2019-02-13 21:00:00'),
                        ('4', 'AJAX', 'REAL MADRID', '8ème Aller', '2019-02-13 21:00:00'),
                        ('5', 'OLYMPIQUE LYONNAIS', 'FC BARCELONE', '8ème Aller', '2019-02-19 21:00:00'),
                        ('6', 'LIVERPOOL', 'FC BAYERN', '8ème Aller', '2019-02-19 21:00:00'),
			('7', 'ATLETICO MADRID', 'JUVENTUS TURIN', '8ème Aller', '2019-02-20 21:00:00'),
                        ('8', 'SCHALKE 04', 'MANCHESTER CITY', '8ème Aller', '2019-02-20 21:00:00'),
                        ('9', 'REAL MADRID', 'AJAX', '8ème Retour', '2019-03-05 21:00:00'),
                        ('10', 'DORTMUND', 'TOTTENHAM', '8ème Retour', '2019-03-05 21:00:00'),
                        ('11', 'FC PORTO', 'AS ROMA', '8ème Retour', '2019-03-06 21:00:00'),
                        ('12', 'PSG', 'MANCHESTER UNITED', '8ème Retour', '2019-03-06 21:00:00'),
                        ('13', 'MANCHESTER UNITED', 'SCHALKE 04', '8ème Retour', '2019-03-12 21:00:00'),
                        ('14', 'JUVENTUS TURIN', 'ATLETICO MADRID', '8ème Retour', '2019-03-12 21:00:00'),
                        ('15', 'FC BAYERN', 'LIVERPOOL', '8ème Retour', '2019-03-13 21:00:00'),
                        ('16', 'FC BARCELONE', 'OLYMPIQUE LYONNAIS', '8ème Retour', '2019-03-13 21:00:00');

