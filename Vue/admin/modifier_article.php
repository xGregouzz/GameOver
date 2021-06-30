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
        require_once '../../Controleur/afficher_article.php';
        $articles = getArticle($db,1, $_GET['id']);
        $id = $_GET['id'];
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
                    <li><a href="selectionner_commande.php">Modifier lignes commande</a></li>
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
    <div class="container">
        <center>
            <h3>Modifier l'article "<?= $articles['nom'] ?>"</h3>
            <h4>Ne touchez pas le contenu si il n'y a aucun changement</h4>
            <?php
                if (!empty($_POST)) {
                    include_once '../../Controleur/modifier_article.php';
                }
            ?>
            <form method="post">
                <h4>Le nom :</h4>
                <textarea id="nom" name="nom" rows="1" cols="30" value=""><?= $articles['nom'] ?></textarea>
                <h4>La plateforme :</h4>
                <input list="plateforme" type="text" id="choix_plateforme" name="plateforme" value="<?= $articles['plateforme'] ?>">
                <datalist id="plateforme">
                    <option value="nintendo">
                    <option value="pc">
                    <option value="playstation">
                    <option value="xbox">
                </datalist>
                <h4>Le type de plateforme :</h4>
                <input list="type" type="text" id="choix_type" name="type" value="<?= $articles['type'] ?>">
                <datalist id="type">
                    <option value="aboPlay">
                    <option value="aboXbox">
                    <option value="aboNintendo">
                    <option value="EpicGames">
                    <option value="nintendo3DS">
                    <option value="nintendoSwitch">
                    <option value="ps3">
                    <option value="ps4">
                    <option value="ps5">
                    <option value="Steam">
                    <option value="xbox360">
                    <option value="xboxOne">
                    <option value="xboxSeriesX">
                </datalist>
                <h4>Le genre :</h4>
                <input list="genre" type="text" id="choix_genre" name="genre" value="<?= $articles['genre'] ?>">
                <datalist id="genre">
                    <option value="abo">
                    <option value="action">
                    <option value="aventure">
                    <option value="combat">
                    <option value="course">
                    <option value="educatif">
                    <option value="gestion">
                    <option value="guerre">
                    <option value="horreur">
                    <option value="sport">
                </datalist>
                <h4>La description :</h4>
                <textarea id="description" name="description" rows="11" cols="40" value=""><?= $articles['description'] ?></textarea>
                <h4>Le pegi :</h4>
                <input list="pegi" type="text" id="choix_pegi" name="pegi" value="<?= $articles['pegi'] ?>">
                <datalist id="pegi">
                    <option value="3">
                    <option value="7">
                    <option value="12">
                    <option value="16">
                    <option value="18">
                </datalist>
                <h4>L'éditeur :</h4>
                <input type="text" name="editeur" value="<?= $articles['editeur'] ?>"/>
                <h4>Le developpeur :</h4>
                <input type="text" name="developpeur" value="<?= $articles['developpeur'] ?>"/>
                <h4>Le prix :</h4>
                <input type="text" name="prix" value="<?= $articles['prix'] ?>"/>
                </br>
                </br>
                </br>
                <button>Modifier</button>
            </form>
        </center>
    </div>
</body>
</html>