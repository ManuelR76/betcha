<?php
session_start();
require '../controller/controller_matchs.php';
?>
<!DOCTYPE html>
<?php
require '../template/header.php';
?>
<body> 
    <!--Message d'accueil avec récupération du nom-->      
    <section class="home-image matchs">
        <div class="container-fluid">
            <header>
                <?php
                require '../template/navbar.php';
                ?>
            </header>
            <div class="card-body">
                <div class="row d-flex justify-content-center">
                    <div class="homePage mask rgba-gradient score"> 
                        <div class="col-md-12">
                            <div class="well bs-component">
                                <div class="col-lg-12 justify-content-center">
                                    <h1 class="titre-evenement">8ème de finale - Ligue des Champions</h1>
                                    <div class="displayMatchs">
                                        <?php foreach ($matchsList AS $matchs) { ?>
                                            <p class="matchDate"><?= $matchs->date; ?> <?= $matchs->hour; ?></p>
                                            <p><?= $matchs->team_a . ' ' . $matchs->score_team_a; ?> - <?= $matchs->score_team_b . ' ' . $matchs->team_b; ?></p>
                                        <?php } ?>
                                    </div>
                                </div>  
                            </div>
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

