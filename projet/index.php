<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--Liens Bootstrap, fichier CSS, icones et fonts-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet"> 
        <link href="public/css/style.css" rel="stylesheet" />
        <title>Betcha !</title>
    </head>
    <body>
        <!--Preloader-->
        <div id="overlayer"></div>
        <span class="loader">
            <span class="loader-inner"></span>
        </span>
        <!--Main image-->
        <section class="main-image">
            <div class="row">
                <div class="col-lg-12 col-sm-6">
                    <div class="introduction">
                        <div class="logo">
                            <img src="public/images/logo_nom.png" alt="logo" height="102" width="350" />
                        </div>
                        <div class="slogan">
                            <h1><strong>Site de paris sportifs entre amis</strong></h1>
                        </div>
                        <div class="icons">
                            <i class="fas fa-basketball-ball fa-2x"></i>
                            <i class="fas fa-futbol fa-2x" id="centerIcon"></i>
                            <i class="fas fa-volleyball-ball fa-2x"></i>
                        </div>
                        <div class="connexion">
                            <!--Bouton et lien vers connexion : Formulaire-->
                            <div class="text-center">
                                <button type="button" onclick="javascript:location.href = 'view/signin.php'" class="connexionButton">Connexion</button>       
                            </div>
                            <div class="text-center">
                                <a id="link" href = 'view/signup.php'>Vous n'avez pas encore de compte ? Inscrivez-vous</a>
                            </div>
                        </div>
                        <!--Tab pour Conditions Générales D'Utilisation-->
                        <!--Bouton d'ouverture du modal-->
                        <div class="rules">
                            <button type="button" data-toggle="modal" data-target="#rulesModal" class="rulesButton">Mentions légales</button>
                            <div id="rulesModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Contenu du modal-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title">Mentions Légales</h2>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <strong>La seule contrepartie à l'utilisation de ces mentions légales, est l'engagement total à laisser le lien crédit subdelirium sur cette page de mentions légales.</strong><br />
                                            Vos mentions légales :
                                            <h2>Informations légales</h2>
                                            <h3>1. Présentation du site.</h3>
                                            <p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site <a href="http://betcha.com/">betcha.com</a> l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi :</p>
                                            <p><strong>Propriétaire</strong> : ROMERO Manuel –  – 2 rue Dombasle<br />
                                                <strong>Créateur</strong>  : <a href="http://www.betcha.com/">ROMERO Manuel</a><br />
                                                <strong>Responsable publication</strong> : ROMERO Manuel – romeromanuel76@gmail.com<br />
                                                Le responsable publication est une personne physique ou une personne morale.<br />
                                                <strong>Webmaster</strong> : ROMERO Manuel – romeromanuel76@gmail.com<br />
                                                <strong>Hébergeur</strong> : OVH – 2 Rue Kellermann, 59100 Roubaix<br />
                                                Crédits : <br />
                                                Le modèle de mentions légales est offert par Subdelirium.com <a target="_blank" href="https://www.subdelirium.com/generateur-de-mentions-legales/" alt="Modèle de mentions légales">Modèle de mentions légales</a></p>

                                            <h3>2. Conditions générales d’utilisation du site et des services proposés.</h3>
                                            <p>L’utilisation du site <a href="http://betcha.com/">betcha.com</a> implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site <a href="http://betcha.com/">betcha.com</a> sont donc invités à les consulter de manière régulière.</p>
                                            <p>Ce site est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par ROMERO Manuel, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.</p>
                                            <p>Le site <a href="http://betcha.com/">betcha.com</a> est mis à jour régulièrement par ROMERO Manuel. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>
                                            <h3>3. Description des services fournis.</h3>
                                            <p>Le site <a href="http://betcha.com/">betcha.com</a> a pour objet de fournir une information concernant l’ensemble des activités de la société.</p>
                                            <p>ROMERO Manuel s’efforce de fournir sur le site <a href="http://betcha.com/">betcha.com</a> des informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>
                                            <p>Tous les informations indiquées sur le site <a href="http://betcha.com/">betcha.com</a> sont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site <a href="http://betcha.com/">betcha.com</a> ne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>
                                            <h3>4. Limitations contractuelles sur les données techniques.</h3>
                                            <p>Le site utilise la technologie JavaScript.</p>
                                            <p>Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour</p>
                                            <h3>5. Propriété intellectuelle et contrefaçons.</h3>
                                            <p>ROMERO Manuel est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels.</p>
                                            <p>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : ROMERO Manuel.</p>
                                            <p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>
                                            <h3>6. Limitations de responsabilité.</h3>
                                            <p>ROMERO Manuel ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site betcha.com, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>
                                            <p>ROMERO Manuel ne pourra également être tenue responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site <a href="http://betcha.com/">betcha.com</a>.</p>
                                            <p>Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. ROMERO Manuel se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, ROMERO Manuel se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie…).</p>
                                            <h3>7. Gestion des données personnelles.</h3>
                                            <p>En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l'article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>
                                            <p>A l'occasion de l'utilisation du site <a href="http://betcha.com/">betcha.com</a>, peuvent êtres recueillies : l'URL des liens par l'intermédiaire desquels l'utilisateur a accédé au site <a href="http://betcha.com/">betcha.com</a>, le fournisseur d'accès de l'utilisateur, l'adresse de protocole Internet (IP) de l'utilisateur.</p>
                                            <p> En tout état de cause ROMERO Manuel ne collecte des informations personnelles relatives à l'utilisateur que pour le besoin de certains services proposés par le site <a href="http://betcha.com/">betcha.com</a>. L'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu'il procède par lui-même à leur saisie. Il est alors précisé à l'utilisateur du site <a href="http://betcha.com/">betcha.com</a> l’obligation ou non de fournir ces informations.</p>
                                            <p>Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.</p>
                                            <p>Aucune information personnelle de l'utilisateur du site <a href="http://betcha.com/">betcha.com</a> n'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat de ROMERO Manuel et de ses droits permettrait la transmission des dites informations à l'éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site <a href="http://betcha.com/">betcha.com</a>.</p>
                                            <p>Le site n'est pas déclaré à la CNIL car il ne recueille pas d'informations personnelles. .</p>
                                            <p>Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>
                                            <h3>8. Liens hypertextes et cookies.</h3>
                                            <p>Le site <a href="http://betcha.com/">betcha.com</a> contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de ROMERO Manuel. Cependant, ROMERO Manuel n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.</p>
                                            <p>La navigation sur le site <a href="http://betcha.com/">betcha.com</a> est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation.</p>
                                            <p>Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies :</p>
                                            <p>Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok.</p>
                                            <p>Sous Firefox : en haut de la fenêtre du navigateur, cliquez sur le bouton Firefox, puis aller dans l'onglet Options. Cliquer sur l'onglet Vie privée.
                                                Paramétrez les Règles de conservation sur :  utiliser les paramètres personnalisés pour l'historique. Enfin décochez-la pour  désactiver les cookies.</p>
                                            <p>Sous Safari : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par un rouage). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section "Confidentialité", cliquez sur Paramètres de contenu. Dans la section "Cookies", vous pouvez bloquer les cookies.</p>
                                            <p>Sous Chrome : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par trois lignes horizontales). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section "Confidentialité", cliquez sur préférences.  Dans l'onglet "Confidentialité", vous pouvez bloquer les cookies.</p>

                                            <h3>9. Droit applicable et attribution de juridiction.</h3>
                                            <p>Tout litige en relation avec l’utilisation du site <a href="http://betcha.com/">betcha.com</a> est soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux compétents de Paris.</p>
                                            <h3>10. Les principales lois concernées.</h3>
                                            <p>Loi n° 78-17 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l'informatique, aux fichiers et aux libertés.</p>
                                            <p> Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique.</p>
                                            <h3>11. Lexique.</h3>
                                            <p>Utilisateur : Internaute se connectant, utilisant le site susnommé.</p>
                                            <p>Informations personnelles : « les informations qui permettent, sous quelque forme que ce soit, directement ou non, l'identification des personnes physiques auxquelles elles s'appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Liens javascript pour Jquery et Bootstrap-->
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="public/js/script.js"></script>
    </body>
</html>
