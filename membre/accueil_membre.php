<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>GameOver</title>
</head>
<style>
    .links {
        display: flex;
        justify-content: space-evenly;
        padding: 15px;
        background-color: aliceblue;
        border: 1px solid black;
    }
    #header {

    }
    .topHeader {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-left: 25px;
        margin-right: 25px;
    }
</style>
<body>
<?php require_once '../config.php'; ?>
<fieldset>
<header id="header">
    <div class="topHeader">
        <div>
            <img width="150px" src="../img/LogoGameOver.png" alt="">
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
                <?php
                // order by id desc pour trier dans l'odre décroissant
                $articles = $connect->query('SELECT * FROM articles ORDER BY id DESC'); 
                if(isset($_GET['search']) AND !empty($_GET['search'])){
                    $recherche = htmlspecialchars($_GET['search']);
                    // ou le pseudo ressemble a la recherche ----"%'.$recherche.'%"----
                    $articles = $connect->query('SELECT * FROM articles WHERE nom LIKE "%'.$recherche.'%" ORDER BY id DESC');
                }
                ?>

                <form method="GET">
                    <input type="search" name="search" placeholder="Rechercher" autocomplete="off">
                    <input type="submit" name="envoyer" value="🔎">
                </form>
                </br>
                </br>
                <li><a href="accueil_membre.php">Accueil</a></li>
                <li><a href="modifier_profil.php?id=<?= $_SESSION['id']?>">Modifier Profil</a></li>
                <li><a href="deconnexion.php">Déconnexion</a></li>
<<<<<<< HEAD
                <li><a href="desinscrire.php?id=<?= $_SESSION['id'] ?>">Désinscription</a></li>
                <li><a href="index.php?action=panier.php">Voir mon panier</a></li>

=======
                <li><a href="desinscrire.php?id=<?= $_SESSION['id']?>">Désinscription</a></li>
>>>>>>> d7d9c40ff44006b0012fcc02d52258ed2fa8ba68
            </ul>
        </section>
    </fieldset>
    <link href="../CSS/categories.css" rel="stylesheet">
    <nav class="menu">
		<section class="categorie">
			<h3>PlayStation</h3>
			<ul>
				<li><a href="playstation3.php">PlayStation 3</a></li>
				<li><a href="playstation4.php">PlayStation 4</a></li>
				<li><a href="playstation5.php">PlayStation 5</a></li>
                <li><a href="aboplay.php">Abonnement PlayStation</a></li>
			</ul>
		</section>
		<section class="categorie">
			<h3>Xbox</h3>
			<ul>
				<li><a href="xbox360.php">Xbox 360</a></li>
				<li><a href="xboxone.php">Xbox One</a></li>
				<li><a href="xboxseriesx.php">Xbox Series X</a></li>
				<li><a href="aboxbox.php">Abonnement Xbox</a></li>
			</ul>
		</section>
		<section class="categorie">
			<h3>Nintendo</h3>
			<ul>
				<li><a href="nintendo3ds.php">Nintendo 3DS</a></li>
				<li><a href="nintendoswitch.php">Nintendo Switch</a></li>
				<li><a href="abonintendo.php">Abonnement Nintendo</a></li>
			</ul>
		</section>
		<section class="categorie">
			<h3>PC</h3>
			<ul>
				<li><a href="steam.php">Steam</a></li>
				<li><a href="epicgames.php">Epic Games</a></li>
			</ul>
		</section>
	</nav>
    </header>
    </br>
    </br>
    <section class="afficher_utilisateur">
            <?php
            if($articles->rowCount() > 0){
                while($article = $articles->fetch()) {
            ?>

            <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td rowspan="3"><img src="../img/<?php echo $article['image']; ?>"></td>
                    <td><h2 style="margin: 0px;padding:0px"><?= $article['nom'] ?></h2></td>
                </tr>
                <tr>
                    <td><p><?= $article['description'] ?></p></td>
                </tr>
                <tr>
                    <td><a href="unique_article.php?id=<?= $article['id'] ?>">Voir l'article en entier</a></td>
                </tr>
            </table>
            </br>
            </br>

            <?php
                }
            } else{
            ?>
                <p>Aucun resultat<p>
            <?php
            }
            ?>
        </section>
</body>
</html>