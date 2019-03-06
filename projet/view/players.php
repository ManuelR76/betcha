<?php
session_start();
require '../controller/controller_players.php';
?>
<!DOCTYPE html>
<?php
require '../template/header.php';
?>
<body> 
    <!--Message d'accueil avec récupération du nom-->      
    <section class="home-image players">
        <div class="container-fluid">
            <header>
                <?php
                require '../template/navbar.php';
                ?>
            </header>
            <div class="card-body">
                <div class="row d-flex justify-content-center">
                    <div class="homePage mask rgba-gradient"> 
                        <div class="col-md-12">
                            <div class="well bs-component">
                                <div class="col-md-12">
                                    <div class="col-lg-12 col-sm-12 justify-content-center">
                                        <h1 class="titre-evenement">La fiche des joueurs</h1>·                            
                                        <div class="media-body">
                                            <div class="table-responsive text-nowrap">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Pseudo</th>
                                                            <th>NOM</th>
                                                            <th>Prénom</th>
                                                            <th>Points</th>
                                                            <th>Classement</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($playersList AS $player) { ?>
                                                            <tr>
                                                                <td><?= $player->alias; ?></td>
                                                                <td><?= $player->lastname; ?></td>
                                                                <td><?= $player->firstname; ?></td>
                                                                <td>0</td>
                                                                <td>0</td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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
