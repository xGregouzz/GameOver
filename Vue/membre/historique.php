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
                        <p>Bienvenue <?php session_start(); echo ucfirst ($_SESSION['client']) ?></p>
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
        <h2>Historique d'achat</h2>
        <br>
    </center>
    <?php
        require_once('../../Modele/historique.php');
        foreach ($commandes as $commande): 
    ?>
    <center>
        <p>Commande n° <?= $commande['id'] ?> acheté le <?= $commande['date_commande'] ?></p>
        <p><a href="../../Vue/membre/historique_lignes_commandes.php?id=<?= $commande['id'] ?>">Voir plus</a></p>
    </center>
    <?php endforeach ?>
    <center>
        <br>
        <br>
        <a href="accueil_membre.php">Menu principal</a>
    </center>
</body>
</html>