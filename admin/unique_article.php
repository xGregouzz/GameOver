<!DOCTYPE html>
<html lang="en">
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
<?php
    require_once 'config.php';
    require_once 'fonction_affichage.php';
    $articles = getArticle($connect,1, $_GET['id']);
?>
<fieldset>
<header id="header">
    <div class="topHeader">
        <div>
            <img width="150px" src='LogoGameOver.png' alt="">
        </div>
        <center>
            <fieldset>
                  <h1>GameOver</h1>
            </fieldset>
         </center>
        <nav class="action">
        <section class="categorie">
            <ul>
                <li><a href="deconnexion.php">Deconnexion</a></li>
            </ul>
        </section>
    </fieldset>
    <link href="categories.css" rel="stylesheet">
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
                <li><a href="abopc.php">Abonnement PC</a></li>
			</ul>
		</section>
	</nav>
</header>
<div class="container">
    <center>
    <h1><?= $articles['nom'] ?></h1>
    <h1><?= $articles['plateforme'] ?></h1>
    <h1><?= $articles['type'] ?></h1>
    <h1><?= $articles['description'] ?></h1>
    <h1><?= $articles['genre'] ?></h1>
    <h1><?= $articles['pegi'] ?></h1>
    <h1><?= $articles['editeur'] ?></h1>
    <h1><?= $articles['developpeur'] ?></h1>
    <h1><?= $articles['prix'] ?></h1>
    </center>
</div>
<ul>
    <li><a href="supprimer_article.php?id=<?= $articles['id'] ?>">Supprimer Article</a></li>
    <li><a href="modifier_article.php?id=<?= $articles['id'] ?>">Modifier Article</a></li>
    <li><a href="accueil_admin.php">Espace Admin</a></li>
</ul>
</body>
</html>