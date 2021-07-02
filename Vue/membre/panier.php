<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="CSS/accueil_membre.css" rel="stylesheet">
    <title>GameOver</title>
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
                    <img width="200px" src='img/LogoGameOver.png' alt="">
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
                        <li><a href="Vue/membre/accueil_membre.php">Accueil</a></li>
                        <li><a href="Vue/membre/modifier_profil.php?id=<?= $_SESSION['id']?>">Modifier Profil</a></li>
                        <li><a href="index.php?action=Vue/membre/panier.php">Voir mon panier</a></li>
                        <li><a href="Vue/membre/historique.php">Historique d'Achat</a></li>
                        <li><a href="index.php?action=Vue/membre/minichat.php">Chat</a></li>
                        <li><a href="Controleur/deconnexion.php">Déconnexion</a></li>
                        <li><a href="Vue/membre/desinscrire.php">Désinscription</a></li>
                    </ul>
                </section>
            </div>
        </header>
    </fieldset>
    <nav class="menu">
        <section class="categorie">
            <h3>PlayStation</h3>
            <ul>
                <li><a href="index.php?action=Vue/membre/playstation3.php">PlayStation 3</a></li>
                <li><a href="index.php?action=Vue/membre/playstation4.php">PlayStation 4</a></li>
                <li><a href="index.php?action=Vue/membre/playstation5.php">PlayStation 5</a></li>
                <li><a href="index.php?action=Vue/membre/aboplay.php">Abonnement PlayStation</a></li>
            </ul>
        </section>
        <section class="categorie">
            <h3>Xbox</h3>
            <ul>
                <li><a href="index.php?action=Vue/membre/xbox360.php">Xbox 360</a></li>
                <li><a href="index.php?action=Vue/membre/xboxone.php">Xbox One</a></li>
                <li><a href="index.php?action=Vue/membre/xboxseriesx.php">Xbox Series X</a></li>
                <li><a href="index.php?action=Vue/membre/aboxbox.php">Abonnement Xbox</a></li>
            </ul>
        </section>
        <section class="categorie">
            <h3>Nintendo</h3>
            <ul>
                <li><a href="index.php?action=Vue/membre/nintendo3ds.php">Nintendo 3DS</a></li>
                <li><a href="index.php?action=Vue/membre/nintendoswitch.php">Nintendo Switch</a></li>
                <li><a href="index.php?action=Vue/membre/abonintendo.php">Abonnement Nintendo</a></li>
            </ul>
        </section>
        <section class="categorie">
            <h3>PC</h3>
            <ul>
                <li><a href="index.php?action=Vue/membre/steam.php">Steam</a></li>
                <li><a href="index.php?action=Vue/membre/epicgames.php">Epic Games</a></li>
            </ul>
        </section>
    </nav>
    </header>
    <br>
    <br>
    <br>
    <?php  
        include_once("Controleur/cart.php");
        $cart = findcart();
        $date_commande = date('Y-m-d H:i:s');
    ?>
    <center>
        <table cellpadding="5" cellspacing="0">
            <tr style="background-color: blue;">
                <td rowspan="2">Quantité</td>
                <td rowspan="2">Description</td>
                <td colspan="2" align="center">Prix</td>
            </tr>
            <tr style="background-color: blue;">
                <td>Each</td>
                <td>Total</td>
            </tr>
            <?php
                include_once('Controleur/panier.php');
            ?>
            <tr>
                <td colspan="3" align="right"><b>Total</b></td>
                <td align="center"><b><?php echo cartTotalPrice(); ?></b></td>
            </tr>
        </table>
        <br>
        <a href="Vue/membre/accueil_membre.php">Continuer le shopping</a>&nbsp
        <a href="index.php?action=empty.php">Vider le panier</a>&nbsp
        <a href="index.php?action=checkout.php">Commander</a>
    </center>
</body>
</html>