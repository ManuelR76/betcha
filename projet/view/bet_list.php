<?php
session_start();
require '../controller/controller_bet_list.php';
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
                                    <h2 class="middleTitle">Mes paris en cours</h2>
                                    <div class="displayMatchs">
                                        <?php foreach ($betList AS $bet) { ?>
                                            <p class="matchDate"><?= $bet->date; ?> <?= $bet->hour; ?></p>
                                            <p><?= $bet->team_a . ' ' . $bet->bet_team_a; ?> - <?= $bet->bet_team_b . ' ' . $bet->team_b; ?></p>
                                            <p>Enregistré le <?= $bet->dateBet; ?> <?= $bet->hourBet; ?></p>                                           
                                            <a role="button" href="bet_update.php?id=<?= $bet->id_ranking; ?>" class="betButton validateBet btn btn-primary"><i class="fas fa-undo-alt"></i> Modifier</a>                                            
                                            <a role="button" href="bet_delete.php?id=<?= $bet->id_ranking; ?>" class="betButton validateBet btn btn-danger"><i class="fas fa-undo-alt"></i> Supprimer</a>
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

