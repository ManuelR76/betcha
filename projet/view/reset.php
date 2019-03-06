<!--Mise en place des controllers-->
<?php
// on démarre la session
session_start();
// on inclut les controllers
require '../controller/controller_signup.php';
?>
<!DOCTYPE html>
<?php
require '../template/header.php';
?>
<body>
    <!--Formulaire pour création de compte avec messages d'erreur-->
    <section id="LoginForm">
        <div class="container-fluid">
            <h1 id="connexionTitle">Changement mot de passe</h1>
            <div class="login-form">
                <div class="main-div">
                    <div class="panel">
                        <h2>Création nouveau mot de passe</h2>
                        <p>Veuillez entrer votre adresse mail ainsi qu'un nouveau mot de passe</p>
                    </div>
                    <form id="Login" name="forgetPassword" action="" method="POST" novalidate>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" value="<?= isset($user->email) ? $user->email : ''; ?>" required>
                            <span class="error"><?= isset($errorsArray['email']) ? $errorsArray['email'] : ''; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="password">Nouveau mot de passe</label>
                            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Mot de passe" value="<?= isset($user->password) ? $user->password : ''; ?>" required>
                            <span class="error"><?= isset($errorsArray['password']) ? $errorsArray['password'] : ''; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirmer nouveau mot de passe</label>
                            <input type="password" name="confirmPassword" class="form-control" id="inputConfirmPassword" placeholder="Confirmer mot de passe" value="<?= isset($confirmPassword) ? $confirmPassword : ''; ?>" required>
                            <span class="error"><?= isset($errorsArray['confirmPassword']) ? $errorsArray['confirmPassword'] : ''; ?></span>
                        </div>
                        <div class="backPage">
                            <a href="signin.php">Retour</a>
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary">Se connecter</button>
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
