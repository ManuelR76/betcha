<?php
session_start();
require '../controller/controller_bet.php';
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
                                    <p>Veuillez pronostiquer les matchs à venir</p>
                                    <div class="displayMatchs">
                                        <!--Affichage message ajout pari-->
                                        <?php if ($addBetSuccess) { ?>
                                            <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                                                <strong>Pari enregistré ! Vous pouvez parier sur les autres matchs.</strong> 
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        <?php } ?>
                                        <!--Formulaire pari-->
                                        <form method="POST" action="">
                                            <?php foreach ($matchsList AS $matchs) { ?>
                                                <p class="matchDate"><?= $matchs->date; ?> <?= $matchs->hour; ?></p>
                                                <p><?= $matchs->team_a; ?> - <?= $matchs->team_b; ?></p>
                                                <input type="hidden" name="id_match<?= $matchs->id_match; ?>" value="<?= $matchs->id_match; ?>" /> 
                                                <input type="number" min="0" class="betInput" name="bet_team_a<?= $matchs->id_match; ?>" value="" /><span class="hyphen"> - </span><input type="number" min="0" class="betInput" name="bet_team_b<?= $matchs->id_match; ?>" />                                           
                                                <p class="error"><?= isset($errorsArray['bet_team_a' . $matchs->id_match]) ? $errorsArray['bet_team_a' . $matchs->id_match] : ''; ?></p> 
                                                <p class="error"><?= isset($errorsArray['bet_team_b' . $matchs->id_match]) ? $errorsArray['bet_team_b' . $matchs->id_match] : ''; ?></p>
                                                <button id="submitBet" name="submitBet<?= $matchs->id_match; ?>" type="submit" class="betButton validateBet btn btn-primary"><i class="far fa-plus-square"></i> Valider</button>       
                                                <?php
                                                $idMatch = $matchs->id_match;
                                            }
                                            ?>                                           
                                        </form>
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
