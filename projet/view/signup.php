<!--Mise en place des controllers-->
<?php
// on démarre la session
session_start();
// on inclut les controllers
require '../controller/controller_signup.php';
?>
<!DOCTYPE html>
<?php
require_once '../template/header.php';
?>
<body>
    <!--Formulaire pour création de compte avec messages d'erreur-->
    <section id="LoginForm">
        <div class="container-fluid">
            <h1 id="connexionTitle">Inscription</h1>
            <?php if ($addSuccess) { ?>
                <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                    <strong>Inscription réalisée avec succès !</strong> Veuillez vous connecter.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="connexionLink mt-5">
                    <a href="signin.php"><i class="fas fa-user"></i> Connexion</a>
                </div>
            <?php } else { ?>
                <div class="login-form">

                    <div class="main-div">
                        <div class="panel">
                            <h2>Création compte utilisateur</h2>
                            <p>Veuillez entrer votre nom, adresse mail ainsi qu'un mot de passe</p>
                        </div>
                        <form id="Login" name="signup" action="signup.php" method="POST" novalidate>
                            <div class="form-group">
                                <label for="lastname">Nom</label>
                                <input type="text" name="lastname" class="form-control" id="inputEmail" placeholder="Nom" value="<?= isset($user->lastname) ? $user->lastname : ''; ?>" required>
                                <span class="error"><?= isset($errorsArray['lastname']) ? $errorsArray['lastname'] : ''; ?></span>
                            </div>                           
                            <div class="form-group">
                                <label for="firstname">Prénom</label>
                                <input type="text" name="firstname" class="form-control" id="inputEmail" placeholder="Prénom" value="<?= isset($user->firstname) ? $user->firstname : ''; ?>" required>
                                <span class="error"><?= isset($errorsArray['firstname']) ? $errorsArray['firstname'] : ''; ?></span>
                            </div>
                            <div class="form-group">
                                <label for="alias">Pseudonyme</label>
                                <input type="text" name="alias" class="form-control" id="inputEmail" placeholder="Pseudonyme" value="<?= isset($user->alias) ? $user->alias : ''; ?>" required>
                                <span class="error"><?= isset($errorsArray['alias']) ? $errorsArray['alias'] : ''; ?></span>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" value="<?= isset($user->email) ? $user->email : ''; ?>" required>
                                <span class="error"><?= isset($errorsArray['email']) ? $errorsArray['email'] : ''; ?></span>
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Mot de passe"  required>
                                <span class="error"><?= isset($errorsArray['password']) ? $errorsArray['password'] : ''; ?></span>
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">Confirmer mot de passe</label>
                                <input type="password" name="confirmPassword" class="form-control" id="inputConfirmPassword" placeholder="Confirmer mot de passe" required>
                                <span class="error"><?= isset($errorsArray['confirmPassword']) ? $errorsArray['confirmPassword'] : ''; ?></span>
                            </div>
                            <div class="forgot">
                                <a href="signin.php">Vous avez déjà un compte ?</a>
                            </div>
                            <button name="submit" type="submit" class="btn btn-primary"><i class="fas fa-user"></i> S'inscrire</button>
                        </form>
                    <?php } ?>
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
