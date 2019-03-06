<?php
session_start();
?>
<!DOCTYPE html>
<?php
require '../template/header.php';
?>
<body> 
    <!--Message d'accueil avec récupération du nom-->      
    <section class="home-image rulesPage">
        <div class="container-fluid">
            <header>
                <?php
                require '../template/navbar.php';
                ?>
            </header>
            <div class="card-body">
                <div class="homePage mask rgba-gradient"> 
                    <div id="rules" class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="rules">Réglément</h1>
                                <h2>Le site</h2>
                                <p>Ce site est l'occasion d'un jeu concours entre amis et collègues, dont l'objet est de pronostiquer des matchs de la Ligue des Champions, avec pour objectif de finir meilleur pronostiqueur.
                                    En ce qui concerne l'accès au site, l'administrateur se dégage de toute responsabilité quant aux éventuelles difficultés de connexion, lenteurs et autres indisponibilités. </p>
                                <h2>L'inscription</h2>
                                <p>L'inscription est obligatoire pour pouvoir participer au jeu concours et se mesurer aux autres joueurs. Une fois validée par l'administrateur, vous aurez accès aux différentes rubriques du site et vous pourrez commencer à enregistrer vos pronostics. Pour vous inscrire, rendez vous dans la rubrique demande d'inscription sur la page de connexion.
                                    Le formulaire d'inscription nécessite plusieurs informations obligatoires : </p>
                                <ul>
                                    <li>
                                        les identifiants : ils sont composés d'un pseudo (ou login) et d'un mot de passe ; votre mot de passe devra comporter au moins 6 caractères. Ces données sont indispensables pour vous connecter. 
                                    </li>
                                    <li>
                                        les informations personnelles obligatoires : ces informations sont nécessaires pour le bon fonctionnement du site (ces informations ne seront en aucun cas divulguées ou utilisées à des fins autres que ce jeu concours). 
                                    </li>
                                    <li>
                                        les informations personnelles facultatives : ces informations sont destinées à faire un peu mieux connaissance mais ne sont pas obligatoires (ces informations ne seront en aucun cas divulguées ou utilisées à des fins autres que ce jeu concours). 
                                    </li>
                                </ul>
                                <h2>Le compte du joueur</h2>
                                <p>Chaque joueur, après inscription, se voit attribuer un compte afin de pouvoir participer au jeu concours. L'inscription est strictement limitée à un compte par personne. En cas de multi-comptes avérés, chaque compte supplémentaire sera supprimé.
                                    Vous disposez d'un droit d'accès, de modification et de rectification des informations vous concernant. Pour modifier vos informations personnelles, rendez-vous dans la rubrique Mon Profil.
                                    <br /> En cas d'oubli de votre mot de passe ou de votre pseudo, veuillez contacter l'administrateur. </p>
                                <h2>Le règlement</h2>
                                <p>Le présent règlement fixe l'organisation générale du jeu concours ainsi que les modalités de participation. Toute personne souhaitant participer au concours devra approuver le règlement et ne pourra en aucun cas refuser une des modalités décrites dans celui-ci. </p>
                                <h2>Le jeu</h2>
                                <p>Le but du jeu est de pronostiquer les scores des différentes rencontres de la compétition. Chaque pronostic peut vous rapporter des points en fonction du résultat (1N2), du score et du coéfficient, ainsi que chaque succès en fonction de votre réponse. Ces points permettront par la suite d'établir un classement entre les joueurs. </p>
                                <h2>Les pronostics</h2>
                                <p> Chaque pronostic est limité dans le temps par une date et une heure de clôture, celle-ci pouvant être modifiée à tout moment si la date et/ou l'heure d'un match venaient à changer. Le joueur devra donc valider un pronostic avant sa date et heure de clôture, l'enregistrement des pronostics étant clos 15 minutes avant le début du match.
                                    Les pronostics ne peuvent faire l'objet d'aucune demande d'annulation ou de modification de la part du joueur après leur clôture. Si un joueur n'effectue pas de pronostic pour un match, aucun point ne lui sera attribué pour celui-ci. </p>
                                <h2>Les résultats</h2>
                                <p>Le résultat du match retenu est le résultat obtenu à la fin du temps règlementaire plus le temps additionnel pour les matchs de poule, et à la fin des prolongations, s'il y en a, pour les matchs de la phase finale. En aucun cas, les tirs au but ne seront pris en compte dans le résultat. </p>
                                <h2>Les points</h2>
                                <p>Un joueur trouvant le bon résultat (1N2) se voit attribuer 2 pts. S'il trouve le bon nombre de buts d'une des deux equipes, il marque 1 pt de bonus, soit 3 pts. S'il trouve le bon nombre de buts des deux equipes, il marque 2 pts de bonus, soit 4 pts. Il est nécessaire que le joueur ait trouvé le bon résultat (1N2) pour marquer les points bonus.
                                    Quelques exemples pour être sûr que vous ayez bien compris (si si c'est mieux) : </p>
                                <ul>
                                    <li>pronostics du joueur: 2-3 et score du match: 1-2 le joueur marque 2 pts</li>
                                    <li>pronostics du joueur: 2-3 et score du match: 1-3 le joueur marque 3 pts</li>
                                    <li>pronostics du joueur: 2-3 et score du match: 2-3 le joueur marque 4 pts</li>
                                    <li>pronostics du joueur: 2-3 et score du match: 2-0 le joueur marque 0 pt</li>
                                </ul>
                                <p>A chaque match est attribué un coefficient, qui sera multiplié au nombre de points obtenu pour ce match. Ces coefficients sont fixés avant le début du concours et ne sont en aucun cas modifiables après le début du concours.
                                    Exemple : si vous obtenez 3 pts pour un match avec un coefficient 2, votre nombre de points sera 3 * 2 = 6 pts. </p>
                                <h2>Le gagnant</h2>
                                <p>Le gagnant est le joueur qui comptabilise le plus de points à la fin de tous les matchs, plus les succès. En cas d'égalité les joueurs seront déclarés ex-aequo. </p>
                                <h2>Dispositions générales</h2>
                                <p>Votre fabuleux administrateur se donne le droit d'exclure tout participant troublant le bon déroulement du jeu. Toute tentative de fraude se verra sanctionnée, après vérification, par la clôture immédiate du compte concerné. </p>

                            </div>     
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <footer>
        <?php
        require '../template/footer.php';
        ?>
    </footer>
    <?php
    require '../template/scripts.php';
    ?>
</body>
</html>
