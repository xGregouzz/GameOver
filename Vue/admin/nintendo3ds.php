<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="CSS/accueil_admin.css" rel="stylesheet">
    <title>GameOver</title>
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
                        <p>Bienvenue <?php echo ucfirst ($_SESSION['admin']) ?></p>
                    </fieldset>
                </center>
                <nav class="action">
                <section class="categorie">
                    <ul>
                        <li><a href="Vue/admin/accueil_admin.php">Accueil</a></li>
                        <li><a href="Vue/admin/ajouter_article.php">Ajouter un article</a></li>
                        <li><a href="Vue/admin/selectionner_commande.php">Modifier lignes commande</a></>
                        <li><a href="Controleur/deconnexion.php">Deconnexion</a></li>
                        <li><a href="Vue/admin/desinscrire.php">Désinscription</a></li>
                    </ul>
                </section>
            </div>
    </fieldset>
            <nav class="menu">
                <section class="categorie">
                    <h3>PlayStation</h3>
                    <ul>
                        <li><a href="index.php?action=Vue/admin/playstation3.php">PlayStation 3</a></li>
                        <li><a href="index.php?action=Vue/admin/playstation4.php">PlayStation 4</a></li>
                        <li><a href="index.php?action=Vue/admin/playstation5.php">PlayStation 5</a></li>
                        <li><a href="index.php?action=Vue/admin/aboplay.php">Abonnement PlayStation</a></li>
                    </ul>
                </section>
                <section class="categorie">
                    <h3>Xbox</h3>
                    <ul>
                        <li><a href="index.php?action=Vue/admin/xbox360.php">Xbox 360</a></li>
                        <li><a href="index.php?action=Vue/admin/xboxone.php">Xbox One</a></li>
                        <li><a href="index.php?action=Vue/admin/xboxseriesx.php">Xbox Series X</a></li>
                        <li><a href="index.php?action=Vue/admin/aboxbox.php">Abonnement Xbox</a></li>
                    </ul>
                </section>
                <section class="categorie">
                    <h3>Nintendo</h3>
                    <ul>
                        <li><a href="index.php?action=Vue/admin/nintendo3ds.php">Nintendo 3DS</a></li>
                        <li><a href="index.php?action=Vue/admin/nintendoswitch.php">Nintendo Switch</a></li>
                        <li><a href="index.php?action=Vue/admin/abonintendo.php">Abonnement Nintendo</a></li>
                    </ul>
                </section>
                <section class="categorie">
                    <h3>PC</h3>
                    <ul>
                        <li><a href="index.php?action=Vue/admin/steam.php">Steam</a></li>
                        <li><a href="index.php?action=Vue/admin/epicgames.php">Epic Games</a></li>
                    </ul>
                </section>
            </nav>
        </header>
    </br>
    </br>
    <div class="container">
        <?php
            require_once('Modele/nintendo3ds.php');
            foreach ($articles as $article):
        ?>
        
        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td rowspan="3"><img src="img/<?php echo $article['image'] ?>"></td>
                <td><h2 style="margin: 0px;padding:0px"><?= $article['nom'] ?></h2></td>
            </tr>
            <tr>
                <td><p><?= $article['description'] ?></p></td>
            </tr>
            <tr>
                <td><a href="Vue/admin/afficher_article.php?id=<?= $article['id'] ?>">Voir l'article en entier</a></td>
            </tr>
        </table>
        </br>
        </br>
        <?php endforeach ?>
    </div>
</body>
</html>