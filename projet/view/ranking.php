<?php
session_start();
require '../controller/controller_ranking.php';
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
                                        <h1 class="titre-evenement">Classement Général</h1>·                            
                                        <div class="media-body">
                                            <div class="table-responsive text-nowrap">
                                                <table class="table table-condensed table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th width="33%">Pseudo</th>
                                                            <th width="33%">NOM</th>
                                                            
                                                            <th width="33%">Points</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($playersListForRanking AS $player) { ?>
                                                            <tr>
                                                                <td class="text-center"><?= $player->alias; ?></td>
                                                                <td class="text-center"><?= $player->lastname . ' ' . $player->firstname; ?></td>
                                                                
                                                                <td class="text-center text-info">0</td>
                                                                
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
