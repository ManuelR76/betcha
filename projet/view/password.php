<?php
session_start();
?>
<!DOCTYPE html>
<?php
require '../template/header.php';
?>
<body> 
    <!--Message d'accueil avec récupération du nom-->      
    <section class="home-image passwordPage">
        <div class="container-fluid">
            <header>
                <?php
                require '../template/navbar.php';
                ?>
            </header>
            <div class="card-body">
                <div class="homePage mask rgba-gradient"> 
                    <div id="main" class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="well bs-component">
                                    <h1 class="col-md-offset-2 password mb-3 mt-2">Mon mot de passe</h1>

                                    <p class="col-md-offset-2"><strong>Veuillez renseigner les champs obligatoires.</strong>
                                    </p>

                                    <div class="row">
                                        <form class="form-horizontal col-md-12 col-md-offset-1 mb-3" method="post" action="/joueur/motdepasse">
                                            <fieldset>

                                                <div class="form-group">
                                                    <label for="old-password" class="col-lg-12 control-label">Ancien mot de passe *</label>
                                                    <input class="col-md-4" name="old-password" id="old-password" placeholder="Ancien mot de passe" type="password" >

                                                </div>

                                                <div class="form-group">
                                                    <label for="password" class="col-lg-12 control-label">Mot de passe *</label>

                                                    <input class="col-md-4" name="password" id="password" placeholder="Mot de passe" type="password" value="">
<!--                                                        <span class="help-block">(6 caract&egrave;res minimum)</span>-->

                                                </div> 

                                                <div class="form-group">
                                                    <label for="password2" class="col-lg-12 control-label">Confirmation du mot de passe *</label>

                                                    <input class="col-md-4 mb-3" name="password2" id="password2" placeholder="Confirmation mot de passe" type="password" value="">

                                                </div>

                                                <div class="form-group">
                                                    <div class="col-lg-12 col-md-offset-3">
                                                        <button name="reset" type="reset" class="btn btn-danger">Effacer</button>
                                                        <button name="submit" type="submit" class="btn btn-primary">Modifier</button>
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
