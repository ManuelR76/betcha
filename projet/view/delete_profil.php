<?php
session_start();
require '../controller/controller_delete_user.php';
?>
<?php
require '../template/header.php';
?>
<body> 
    <!--Message d'accueil avec récupération du nom-->      
    <section class="home-image deletePage">
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
                            <h1 class="col-md-offset-2 profil">Suppression compte</h1>

                            <div class="modal-header justify-content-center">
                                <h2 class="" id="exampleModalLabel">Etes-vous sûr de vouloir supprimer votre profil ?</h2>                          
                            </div>
                            <form method="POST" action="">
                                <div class="deleteConfirmation mt-5">
                                    <button name="removeConfirmation" type="submit" class="btn btn-danger"><i class="fas fa-check"></i> Confirmer</button>
                                    <a href="profil.php" role="button" class="btn btn-primary"><i class="fas fa-times"></i> Annuler</a>
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