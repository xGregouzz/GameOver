<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="CSS/accueil.css" rel="stylesheet">
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
                    <center><img width="200px" src="img/LogoGameOver.png" alt=""></center>
                </div>
                <center>
                    <fieldset>
                        <h1>GameOver</h1>
                    </fieldset>
                </center>
                <nav class="action">
                <section class="categorie">
                    <ul>
                        <form method="GET">
                            <input type="search" name="search" placeholder="Rechercher" autocomplete="off">
                            <input type="submit" name="envoyer" value="🔎">
                        </form>
                        </br>
                        </br>         
                        <li><a href="index.php?action=Vue/visiteur/accueil.php">Accueil</a></li>
                        <li><a href="index.php?action=Vue/visiteur/connexion.php">Connexion</a></li>
                        <li><a href="index.php?action=Vue/visiteur/inscription.php">Inscription</a></li>
                    </ul>
                </section>
            </div>
        </header>
    </fieldset>
    <nav class="menu">
		<section class="categorie">
			<h3>PlayStation</h3>
			<ul>
				<li><a href="index.php?action=Vue/visiteur/playstation3.php">PlayStation 3</a></li>
				<li><a href="index.php?action=Vue/visiteur/playstation4.php">PlayStation 4</a></li>
				<li><a href="index.php?action=Vue/visiteur/playstation5.php">PlayStation 5</a></li>
                <li><a href="index.php?action=Vue/visiteur/aboplay.php">Abonnement PlayStation</a></li>
			</ul>
		</section>
		<section class="categorie">
			<h3>Xbox</h3>
			<ul>
				<li><a href="index.php?action=Vue/visiteur/xbox360.php">Xbox 360</a></li>
				<li><a href="index.php?action=Vue/visiteur/xboxone.php">Xbox One</a></li>
				<li><a href="index.php?action=Vue/visiteur/xboxseriesx.php">Xbox Series X</a></li>
				<li><a href="index.php?action=Vue/visiteur/aboxbox.php">Abonnement Xbox</a></li>
			</ul>
		</section>
		<section class="categorie">
			<h3>Nintendo</h3>
			<ul>
				<li><a href="index.php?action=Vue/visiteur/nintendo3ds.php">Nintendo 3DS</a></li>
				<li><a href="index.php?action=Vue/visiteur/nintendoswitch.php">Nintendo Switch</a></li>
				<li><a href="index.php?action=Vue/visiteur/abonintendo.php">Abonnement Nintendo</a></li>
			</ul>
		</section>
		<section class="categorie">
			<h3>PC</h3>
			<ul>
				<li><a href="index.php?action=Vue/visiteur/steam.php">Steam</a></li>
				<li><a href="index.php?action=Vue/visiteur/epicgames.php">Epic Games</a></li>
			</ul>
		</section>
	</nav>
    </header>
    </br>
    </br>
    <?php
        require_once('Modele/accueil.php');
        if($articles->rowCount() > 0){
            while($article = $articles->fetch()) {
    ?>

    <table border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td rowspan="3"><img src="img/<?php echo $article['image']; ?>"></td>
            <td><h2 style="margin: 0px;padding:0px"><?= $article['nom'] ?></h2></td>
        </tr>
        <tr>
            <td><p><?= $article['description'] ?></p></td>
        </tr>
        <tr>
            <td><a href="Vue/visiteur/afficher_article.php?id=<?= $article['id'] ?>">Voir l'article en entier</a></td>
        </tr>
    </table>
    </br>
    </br>

    <?php
            }
        } else {
    ?>

        <p>Aucun resultat<p>

    <?php
        }
    ?>
</body>
</html>