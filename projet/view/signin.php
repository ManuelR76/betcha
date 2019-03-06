<!--Mise en place des controllers-->
<?php
//on démarre la session
session_start();
require '../controller/controller_signin.php';
?>
<!DOCTYPE html>
<?php
require '../template/header.php';
?>
<body>
    <!--Formulaire pour se connecter avec messages d'erreur-->
    <section id="LoginConnexion">
        <div class="container-fluid">
            <h1 id="connexionTitle">Connexion</h1>  
            <div class="login-form">
                <div class="main-div">
                    <div class="panel">
                        <h2>Connexion compte utilisateur</h2>
                        <p>Veuillez entrer votre nom, adresse mail ainsi que votre mot de passe</p>
                    </div>
                    <form id="Login" name="signin" action="" method="POST" novalidate>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" value="<?= isset($_POST['email']) ? $_POST['email'] : ''; ?>" required />
                            <span class="error"><?= isset($errorsArray['email']) ? $errorsArray['email'] : ''; ?></span>
                            <span class="error"><?= isset($errorsArray['login']) ? $errorsArray['login'] : ''; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Mot de passe" required />
                            <span class="error"><?= isset($errorsArray['password']) ? $errorsArray['password'] : ''; ?></span>
                            <span class="error"><?= isset($errorsArray['login']) ? $errorsArray['login'] : ''; ?></span>
                        </div>
                        <div class="forgot">
                            <a href="signup.php">Vous n'avez pas encore de compte ?</a>
                        </div>
                        <div class="forgot">
                            <a href="reset.php">Mot de passe oublié ?</a>
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary"><i class="fas fa-user"></i> Connexion</button>
                    </form>
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
