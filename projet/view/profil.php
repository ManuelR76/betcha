<?php
session_start();
require '../controller/controller_show_profil_user.php';
?>
<?php
require '../template/header.php';
?>
<body> 
    <!--Message d'accueil avec récupération du nom-->      
    <section class="home-image profilPage">
        <div class="container-fluid">
            <header>
                <?php
                require '../template/navbar.php';
                ?>
            </header>
            <div class="card-body">
                <div class="homePage mask rgba-gradient row">
                    <div class="col-lg-12">
                        <div class="well bs-component">
                            <h1 class="col-md-offset-2 profil">Mon Profil</h1>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <p class="bold">Pseudo</p>
                                        <p><?= isset($_POST['alias']) ? $_POST['alias'] : $_SESSION['userInfo']->alias ?></p>
                                    </div>
                                    <div>
                                        <p class="bold">Nom</p>
                                        <p><?= isset($_POST['alias']) ? $_POST['lastname'] : $_SESSION['userInfo']->lastname ?></p>
                                    </div>
                                    <div>
                                        <p class="bold">Prénom</p>
                                        <p><?= isset($_POST['alias']) ? $_POST['firstname'] : $_SESSION['userInfo']->firstname ?></p>
                                    </div>
                                    <div>
                                        <p class="bold">Email</p>
                                        <p><?= isset($_POST['alias']) ? $_POST['email'] : $_SESSION['userInfo']->email ?></p>
                                    </div>
                                    <div class="modifyButton col-lg-7">
                                        <a href="update_profil.php" role=button class="logout btn btn-primary"><i class="fas fa-undo-alt"></i> Modifier</a>
                                    </div>
                                    <!--Bouton Supprimer-->
                                    <!--                                    <div class="deleteButton col-lg-12">
                                                                            <button name="remove" type="button" class="btn btn-danger" data-toggle="modal" data-target="#basicExampleModal"><i class="far fa-trash-alt"></i> Supprimer mon compte</button>
                                                                            <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                                                 aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="exampleModalLabel">Etes-vous sûr de vouloir supprimer votre profil ?</h5>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button name="removeConfirmation" type="button" class="btn btn-danger"><i class="fas fa-check"></i> Confirmer</button>
                                                                                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fas fa-times"></i> Annuler</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>-->
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