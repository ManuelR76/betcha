<?php
session_start();
require '../controller/controller_profil_user.php';
?>
<?php
require '../template/header.php';
?>
<body> 
    <!--Message d'accueil avec récupération du nom-->      
    <section class="home-image updatePage">
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
                            <h1 class="col-md-offset-2 profil">Ma fiche</h1>
                            <?php if ($modifySuccess) { ?>
                                <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                                    <strong>Modification effectuée</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php } ?>
                            <p class="col-md-offset-2">
                                <strong>Veuillez renseigner les champs obligatoires.</strong><br />
                                Vous pouvez importer une photo qui sera visible sur la page des joueurs.
                            </p>
                            <div class="row">
                                <form class="form-horizontal col-lg-12" method="post" action="" enctype="multipart/form-data">
                                    <fieldset class="align-middle">
                                        <div class="form-group">
                                            <label for="alias" class="col-lg-12">Pseudo *</label>
                                            <input  class="col-md-4 col-sm-12" name="alias" id="username" placeholder="Pseudo" type="text" value="<?= isset($_POST['alias']) ? $_POST['alias'] : $_SESSION['userInfo']->alias ?>">                                               
                                            <div class="error"><?= isset($errorsArray['alias']) ? $errorsArray['alias'] : ''; ?></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="lastname" class="col-lg-12 control-label">Nom *</label>                                               
                                            <input class="col-md-4 col-sm-12" name="lastname" id="nom" placeholder="Nom" type="text" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : $_SESSION['userInfo']->lastname ?>">
                                            <div class="error"><?= isset($errorsArray['lastname']) ? $errorsArray['lastname'] : ''; ?></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="firstname" class="col-lg-12 control-label">Prénom *</label>                                              
                                            <input class="col-md-4 col-sm-12" name="firstname" id="prenom" placeholder="Prénom" type="text" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : $_SESSION['userInfo']->firstname ?>">                                                
                                            <div class="error"><?= isset($errorsArray['firstname']) ? $errorsArray['firstname'] : ''; ?></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="col-lg-12 control-label">Email *</label>                                                
                                            <input class="col-md-4 col-sm-12" name="email"  id="mail" placeholder="Email" type="text" value="<?= isset($_POST['email']) ? $_POST['email'] : $_SESSION['userInfo']->email ?>">
                                            <div class="error"><?= isset($errorsArray['email']) ? $errorsArray['email'] : ''; ?></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="picture" class="col-lg-12 control-label">Photo</label>
                                            <div class="col-lg-12 col-sm-12">
                                                <input type="file" name="fileToUpload" id="fileToUpload">
                                                <p class="help-block">Extensions JPG, PNG / Poids max. 1024 ko</p>
                                                <div class="checkbox">
                                                    <label>
                                                        <input id="erase" name="erase" type="checkbox" value=""> supprimer votre photo
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="comment" class="col-lg-12 control-label">Commentaire</label>
                                            <textarea class="col-md-8" name="comment" rows="4" placeholder="ex: On m'appelle le Zizou du pari sportif..."></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="row justify-content-center">

                                                <!-- Bouton Modifier-->
                                                <button name="modifyButton" type="submit" class="logout btn btn-primary"><i class="fas fa-undo-alt"></i> Modifier </button>     

                                                <!-- Bouton Supprimer -->
                                                <a href="delete_profil.php"><button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i> Supprimer mon compte</button></a>

                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
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