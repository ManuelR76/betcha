<?=
require '../controller/controller_logout.php';
?>
<nav class="navbar navbar-header navbar-expand-lg navbar-dark mt-3">
    <a class="navbar-brand ml-2 pr-2" href="home.php"><img src="../public/images/logo_nom.png" alt="logo" height="33" width="122" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light naviguation" href="home.php">Accueil<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light naviguation" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Joueurs</a>
                <div class="dropdown-menu dropdown-info" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item waves-effect waves-light" href="profil.php">Mon Profil</a>
                    <a class="dropdown-item waves-effect waves-light" href="password.php">Mon Mot de Passe</a>
                    <a class="dropdown-item waves-effect waves-light" href="players.php">Autres Joueurs</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light naviguation" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pronostics</a>
                <div class="dropdown-menu dropdown-info" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item waves-effect waves-light" href="bet.php">Pronostiquer</a>
                    <a class="dropdown-item waves-effect waves-light" href="bet_list.php">Voir mes paris</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="scores.php" class="nav-link waves-effect waves-light naviguation">Scores</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light naviguation" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Classement</a>
                <div class="dropdown-menu dropdown-info" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item waves-effect waves-light" href="#">Classement Général</a>
                    <a class="dropdown-item waves-effect waves-light" href="#">Classement par Journée</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="rules.php" class="nav-link waves-effect waves-light naviguation">Réglement</a>
            </li>
            <li class="alias mt-3 ml-3 mr-3">
                <a href="profil.php" id="profilLink" title="Voir mon profil" data-toggle="tooltip" data-placement="bottom"><?= $_SESSION['userInfo']->alias . ' '; ?><i class="fas fa-user"></i></a>               
            </li>
            <li>
                <button name="logoutModal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal"><i class="fas fa-sign-out-alt"></i> Déconnexion</button>
            </li>
            <!--Modal -->
        </ul>
    </div>
</nav>
<div class="logout modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Etes-vous sûr de vouloir vous déconnecter ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="">
                <div class="modal-footer">
                    <button name="logoutButton" type="submit" class="btn btn-danger"><i class="fas fa-check"></i> Confirmer</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fas fa-times"></i> Annuler</button>
                </div>
            </form>
        </div>
    </div>
</div>