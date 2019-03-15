<?php
session_start();
require '../controller/controller_home.php';
?>
<!DOCTYPE html>
<?php
require '../template/header.php';
?>
<body> 
    <!--Message d'accueil avec récupération du nom-->      
    <div class="home-image">
        <div class="container-fluid">
            <header>
                <?php
                require '../template/navbar.php';
                ?>
            </header>
            <div class="card-body">
                <div class="homePage mask rgba-gradient"> 
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="col-lg-12">
                                <div class="welcome">
                                    <div class="mt-2 mb-5 mr-2 col-lg-12 col-sm-12">
                                        <h1><strong>Connexion établie ! Bonjour <?= $_SESSION['userInfo']->alias; ?> !</strong></h1>                       
                                        <h1 id="hello"><strong>Bienvenue sur <img src="../public/images/logo_nom.png" alt="logo" height="33" width="122" /></strong></h1>                                                                 
                                    </div>
                                    <div class="arrow bounce">
                                        <a class="fa fa-arrow-down fa-2x" href="#"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="generalIntroduction">
                                    <!--Carousel Wrapper-->
                                    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                                        <!--                                            Indicators-->
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                                            <li data-target="#carousel-example-3" data-slide-to="3"></li>
                                        </ol>
                                        <!--                                            Indicators
                                                                                    Slides-->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <div class="view">
                                                    <img class="d-block w-100 image-responsive" src="../public/images/stadium-full.jpg" alt="Stade plein">
                                                    <div class="mask rgba-black-light"></div>
                                                </div>
                                                <div class="carousel-caption">
                                                    <h3 class="h3-responsive">Sois le meilleur sur BETCHA !</h3>
                                                    <p>Qui du Real, de la Juve ou du PSG remportera cette année la champion's league ?</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <!-- Mask color-->
                                                <div class="view">
                                                    <img class="d-block w-100" src="../public/images/tirelire.jpg" alt="Tirelire">
                                                    <div class="mask rgba-black-strong"></div>
                                                </div>
                                                <div class="carousel-caption">
                                                    <h3 class="h3-responsive">1ère étape</h3>
                                                    <p>Déterminer (ou non) une mise de départ et créer une cagnotte</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <!--Mask color-->
                                                <div class="view">
                                                    <img class="d-block w-100" src="../public/images/robhino.jpg" alt="Supporters brésiliens">
                                                    <div class="mask rgba-black-slight"></div>
                                                </div>
                                                <div class="carousel-caption">
                                                    <h3 class="h3-responsive">2ème étape</h3>
                                                    <p>Parie sur l'ensemble des matches </p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <!--Mask color-->
                                                <div class="view">
                                                    <img class="d-block w-100" src="../public/images/supporters.jpg" alt="Supporters dans un stade">
                                                    <div class="mask rgba-black-slight"></div>
                                                </div>
                                                <div class="carousel-caption">
                                                    <h3 class="h3-responsive">3ème étape</h3>
                                                    <p>Suis de près le résultat des matchs et croise les doigts</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--                                            Slides
                                                                                    Controls-->
                                        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                        <!-- Controls-->
                                    </div>
                                    <!--Carousel Wrapper -->
                                </div>
                            </div>
                            <div class="carousel-text-sm">
                                <h3 class="text-block-sm">Sois le meilleur sur BETCHA !</h3>
                                <p>Qui du Real, de la Juve ou du PSG remportera cette année la champion's league ?</p>
                                <h3 class="text-block-sm">1ère étape</h3>
                                <p>Déterminer (ou non) une mise de départ et créer une cagnotte</p>
                                <h3 class="text-block-sm">2ème étape</h3>
                                <p>Parie sur l'ensemble des matches </p>
                                <h3 class="text-block-sm">3ème étape</h3>
                                <p>Suis de près le résultat des matchs et croise les doigts</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="well vignette">
                                <h2>Classement général</h2>
                                <table class="table table-condensed table-striped">
                                    <thead>
                                        <tr>
                                            <th width="8%" class="text-center">Pl.</th>
                                            <th width="25%"  class="text-center">Joueur</th>
                                            <th width="57%">Nom</th>
                                            <th width="10%" class="text-center text-info">Pts</th>
                                        </tr>
                                    </thead>
                                    <?php foreach ($playersList AS $player) { ?>
                                    <tbody>
                                    <tr>
                                                <td class="text-center"><?= $player->id_user; ?></td>
                                                <td class="text-center"><?= $player->alias; ?></td>
                                                <td class="text-center"><?= $player->lastname . ' ' . $player->firstname; ?></td>                                     
                                                <td class="text-center text-info">0</td>
                                                
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <p>
                                    <a href="ranking.php">
                                        <span class="glyphicon glyphicon-menu-right" aria-hidden="true">classement complet</span> 
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
