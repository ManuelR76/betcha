<?php
session_start();
require '../controller/controller_bet_delete.php';
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
                <div class="homePage mask rgba-gradient"> 
                    <div class="col-md-12">
                        <div class="well bs-component">
                        <?php if ($deleteBetSuccess) { ?>
                        <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                            <strong>Pari supprimé correctement ! Vous pouvez parier sur les autres matchs.</strong> 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php } ?> 
                            <h1 class="col-md-offset-2 profil">Suppression pari</h1>
                            <div class="modal-header justify-content-center">
                                <h2 class="" id="exampleModalLabel">Etes-vous sûr de vouloir supprimer ce pari ?</h2>                          
                            </div>
                            <form method="POST" action="">
                                <div class="deleteConfirmation mt-5">
                                    <button name="removeBetConfirmation" type="submit" class="btn btn-danger"><i class="fas fa-check"></i> Confirmer</button>
                                    <a href="bet.php" role="button" class="btn btn-primary"><i class="fas fa-times"></i> Annuler</a>
                                </div>
                            </form>
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
