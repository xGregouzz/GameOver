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
?>
<fieldset>
<header id="header">
    <div class="topHeader">
        <div>
            <img width="150px" src='../img/LogoGameOver.png' alt="">
        </div>
        <center>
            <fieldset>
                  <h1>GameOver</h1>
            </fieldset>
         </center>
        <nav class="action">
        <section class="categorie">
            <ul>
                <li><a href="accueil_admin.php">Accueil</a></li>
                <li><a href="ajouter_article.php">Ajouter un article</a></li>
                <li><a href="deconnexion.php">Deconnexion</a></li>
                <li><a href="desinscrire.php?id=<?= $_SESSION['id'] ?>">Désinscription</a></li>
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
			</ul>
		</section>
	</nav>
</header>
</br>
</br>
<div class="container">
    <?php
        $req = $connect->query('SELECT * FROM articles WHERE `type` = "xboxSeriesX"');
        $articles = $req->fetchAll();

        foreach ($articles as $article): ?>
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
        <?php endforeach ?>
</div>
</body>
</html>