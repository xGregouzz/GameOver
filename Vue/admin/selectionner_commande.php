<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="../../CSS/accueil_admin.css" rel="stylesheet">
    <title>GameOver</title>
</head>
<body>
<?php
    session_start();
    
?>
<fieldset>
    <header id="header">
        <div class="topHeader">
            <div>
                <img width="200px" src='../../img/LogoGameOver.png' alt="">
            </div>
            <center>
            
                <fieldset>
                    <h1>GameOver</h1>
                    <p>Bienvenue <?php echo ucfirst ($_SESSION['admin']) ?></p>
                </fieldset>
            </center>
            <nav class="action">
            <section class="categorie">
                <ul>
                    <li><a href="accueil_admin.php">Accueil</a></li>
                    <li><a href="ajouter_article.php">Ajouter un article</a></li>
                    <li><a href="selectionner_commande.php?id">Modifier lignes commande</a></li>
                    <li><a href="../../Controleur/deconnexion.php">Deconnexion</a></li>
                    <li><a href="desinscrire.php">Désinscription</a></li>
                </ul>
            </section>
        </div>
    </fieldset>
        <link href="../CSS/categories.css" rel="stylesheet">
        <nav class="menu">
            <section class="categorie">
                <h3>PlayStation</h3>
                <ul>
                    <li><a href="../../index.php?action=Vue/admin/playstation3.php">PlayStation 3</a></li>
                    <li><a href="../../index.php?action=Vue/admin/playstation4.php">PlayStation 4</a></li>
                    <li><a href="../../index.php?action=Vue/admin/playstation5.php">PlayStation 5</a></li>
                    <li><a href="../../index.php?action=Vue/admin/aboplay.php">Abonnement PlayStation</a></li>
                </ul>
            </section>
            <section class="categorie">
                <h3>Xbox</h3>
                <ul>
                    <li><a href="../../index.php?action=Vue/admin/xbox360.php">Xbox 360</a></li>
                    <li><a href="../../index.php?action=Vue/admin/xboxone.php">Xbox One</a></li>
                    <li><a href="../../index.php?action=Vue/admin/xboxseriesx.php">Xbox Series X</a></li>
                    <li><a href="../../index.php?action=Vue/admin/aboxbox.php">Abonnement Xbox</a></li>
                </ul>
            </section>
            <section class="categorie">
                <h3>Nintendo</h3>
                <ul>
                    <li><a href="../../index.php?action=Vue/admin/nintendo3ds.php">Nintendo 3DS</a></li>
                    <li><a href="../../index.php?action=Vue/admin/nintendoswitch.php">Nintendo Switch</a></li>
                    <li><a href="../../index.php?action=Vue/admin/abonintendo.php">Abonnement Nintendo</a></li>
                </ul>
            </section>
            <section class="categorie">
                <h3>PC</h3>
                <ul>
                    <li><a href="../../index.php?action=Vue/admin/steam.php">Steam</a></li>
				    <li><a href="../../index.php?action=Vue/admin/epicgames.php">Epic Games</a></li>
                </ul>
            </section>
        </nav>
    </header>
    <br>
    <br>
    <br>
    <center>
        <form action='../../Controleur/selectionner_commande.php' method="POST"> 
                <input type="number" id="id" name="id" />
                <br>
                <br>
                <button>Confirmer</button>
        </form> 
    </center>
    </body> 
</html>