<?php
    require_once('../../Modele/modifier_profil.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="../../CSS/accueil_membre.css" rel="stylesheet">
    <title>Modifier</title>
    
    <style>
        table, th{
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <fieldset>
        <header id="header">
            <div class="topHeader">
                <div>
                    <img width="200px" src='../../img/LogoGameOver.png' alt="">
                </div>
                <center>
                    <fieldset>
                        <h1>GameOver</h1>
                        <p>Bienvenue <?php echo ucfirst ($_SESSION['client']) ?></p>
                    </fieldset>
                </center>
                <nav class="action">
                <section class="categorie">
                    <ul>
                        <li><a href="accueil_membre.php">Accueil</a></li>
                        <li><a href="modifier_profil.php?id=<?= $_SESSION['id']?>">Modifier Profil</a></li>
                        <li><a href="../../index.php?action=panier.php">Voir mon panier</a></li>
                        <li><a href="historique.php">Historique d'Achat</a></li>
                        <li><a href="../../index.php?action=Vue/membre/minichat.php">Chat</a></li>
                        <li><a href="../../Controleur/deconnexion.php">Déconnexion</a></li>
                        <li><a href="desinscrire.php">Désinscription</a></li>
                    </ul>
                </section>
            </div>
        </header>
    </fieldset>
    <nav class="menu">
        <section class="categorie">
            <h3>PlayStation</h3>
            <ul>
                <li><a href="../../index.php?action=Vue/membre/playstation3.php">PlayStation 3</a></li>
                <li><a href="../../index.php?action=Vue/membre/playstation4.php">PlayStation 4</a></li>
                <li><a href="../..index.php?action=Vue/membre/playstation5.php">PlayStation 5</a></li>
                <li><a href="../../index.php?action=Vue/membre/aboplay.php">Abonnement PlayStation</a></li>
            </ul>
        </section>
        <section class="categorie">
            <h3>Xbox</h3>
            <ul>
                <li><a href="../../index.php?action=Vue/membre/xbox360.php">Xbox 360</a></li>
                <li><a href="../../index.php?action=Vue/membre/xboxone.php">Xbox One</a></li>
                <li><a href="../../index.php?action=Vue/membre/xboxseriesx.php">Xbox Series X</a></li>
                <li><a href="../../index.php?action=Vue/membre/aboxbox.php">Abonnement Xbox</a></li>
            </ul>
        </section>
        <section class="categorie">
            <h3>Nintendo</h3>
            <ul>
                <li><a href="../../index.php?action=Vue/membre/nintendo3ds.php">Nintendo 3DS</a></li>
                <li><a href="../../index.php?action=Vue/membre/nintendoswitch.php">Nintendo Switch</a></li>
                <li><a href="../../index.php?action=Vue/membre/abonintendo.php">Abonnement Nintendo</a></li>
            </ul>
        </section>
        <section class="categorie">
            <h3>PC</h3>
            <ul>
                <li><a href="../../index.php?action=Vue/membre/steam.php">Steam</a></li>
                <li><a href="../../index.php?action=Vue/membre/epicgames.php">Epic Games</a></li>
            </ul>
        </section>
    </nav>
    </header>
    <center>
        <h1>Informations personnelles</h1>
        <form action="../../Controleur/modifier_profil.php" method="post">

            <p> E-mail : <div class="form-group"><input type="text" class="form-control" required="required" name="E-mail" value="<?php echo $utilisateur['email']; ?>" /></div></p>
            <p> Nom : <div class="form-group"><input type="text" class="form-control" required="required" name="Nom" value="<?php echo $utilisateur['nom']; ?>" /></div></p>
            <p> Prenom : <div class="form-group"><input type="text" class="form-control" required="required" name="Prenom" value="<?php echo $utilisateur['prenom']; ?>" /></div></p>
            <p> Mot de passe : <div class="form-group"><input type="password" class="form-control" required="required" name="password" value="" /></div></p>

            <br><br><br>
            <div class="form-group"><input type="submit"  name="modif" value="Modifier"></div>
        </form>
    </center>
</body>
</html>