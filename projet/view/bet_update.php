<?php
session_start();
require '../controller/controller_bet_update.php';
require '../template/header.php';
?>
<body> 
    <!--Message d'accueil avec récupération du nom-->      
    <section class="home-image updateBet">
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
                                    <p>Vous pouvez modifier vos pronostics</p>
                                    <div class="displayMatchs">                                        
                                        <?php if ($updateBetSuccess) { ?>
                                            <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                                                <strong>Changement sauvegardé !</strong> 
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        <?php } ?> 
                                        <?php if (!$idExist) { ?>
                                            <p>Erreur ce pari n'existe pas!</p>
                                        <?php } else { ?> 
                                            <form method="POST" action="">
                                                <div class="displayMatchs">
                                                    <div class="form-group">
                                                        <p class="matchDate"><?= $betProfil->date; ?> <?= $betProfil->hour; ?></p>
                                                        <p><?= $betProfil->team_a; ?> - <?= $betProfil->team_b; ?> </p>
                                                        <input type="number" min="0" class="betInput" name="bet_team_a" value="<?= $betProfil->bet_team_a ?>" /><span class="hyphen"> - </span><input type="number" min="0" class="betInput" name="bet_team_b" value="<?= $betProfil->bet_team_b ?>" />
                                                        <p>Enregistré le <?= $betProfil->dateBet; ?> <?= $betProfil->hourBet; ?></p>  
                                                        <p class="error"><?= isset($errorsArray['bet_team_a']) ? $errorsArray['bet_team_a'] : ''; ?></p> 
                                                        <p class="error"><?= isset($errorsArray['bet_team_b']) ? $errorsArray['bet_team_b'] : ''; ?></p>
                                                    </div>
                                                </div>
                                                <button id="updateBet" name="updateBet" type="submit" class="betButton validateBet btn btn-danger"><i class="fas fa-undo-alt"></i> Modifier</button>                                                                            
                                            </form>
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
