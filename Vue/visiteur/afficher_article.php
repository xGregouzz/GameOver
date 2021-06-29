<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="../../CSS/accueil.css" rel="stylesheet">
    <title>GameOver</title>
</head>
<body>
    <?php
    session_start();
        require_once '../../Controleur/afficher_article.php';
        $articles = getArticle($db,1, $_GET['id']);
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
                    </fieldset>
                </center>
                <nav class="action">
                <section class="categorie">
                    <ul>
                        <li><a href="../../index.php?action=Vue/visiteur/accueil.php">Accueil</a></li>
                        <li><a href="../../index.php?action=Vue/visiteur/connexion.php">Connexion</a></li>
                        <li><a href="../../index.php?action=Vue/visiteur/inscription.php">Inscription</a></li>
                    </ul>
                </section>
            </div>
        </header>
    </fieldset>
    <nav class="menu">
		<section class="categorie">
			<h3>PlayStation</h3>
			<ul>
				<li><a href="../../index.php?action=Vue/visiteur/playstation3.php">PlayStation 3</a></li>
				<li><a href="../../index.php?action=Vue/visiteur/playstation4.php">PlayStation 4</a></li>
				<li><a href="../../index.php?action=Vue/visiteur/playstation5.php">PlayStation 5</a></li>
                <li><a href="../../index.php?action=Vue/visiteur/aboplay.php">Abonnement PlayStation</a></li>
			</ul>
		</section>
		<section class="categorie">
			<h3>Xbox</h3>
			<ul>
				<li><a href="../../index.php?action=Vue/visiteur/xbox360.php">Xbox 360</a></li>
				<li><a href="../../index.php?action=Vue/visiteur/xboxone.php">Xbox One</a></li>
				<li><a href="../../index.php?action=Vue/visiteur/xboxseriesx.php">Xbox Series X</a></li>
				<li><a href="../../index.php?action=Vue/visiteur/aboxbox.php">Abonnement Xbox</a></li>
			</ul>
		</section>
		<section class="categorie">
			<h3>Nintendo</h3>
			<ul>
				<li><a href="../../index.php?action=Vue/visiteur/nintendo3ds.php">Nintendo 3DS</a></li>
				<li><a href="../../index.php?action=Vue/visiteur/nintendoswitch.php">Nintendo Switch</a></li>
				<li><a href="../../index.php?action=Vue/visiteur/abonintendo.php">Abonnement Nintendo</a></li>
			</ul>
		</section>
		<section class="categorie">
			<h3>PC</h3>
			<ul>
				<li><a href="../../index.php?action=Vue/visiteur/steam.php">Steam</a></li>
				<li><a href="../../index.php?action=Vue/visiteur/epicgames.php">Epic Games</a></li>
			</ul>
		</section>
	</nav>
    </header>
    </br>
    </br>
    <div class="container">
        <center>
            <fieldset>
            <h2>Nom : <?= ucfirst($articles['nom']) ?></h2>
            </fieldset>
            <fieldset>
            <h2>Plateforme : <?= ucfirst($articles['plateforme']) ?></h2>
            </fieldset>
            <fieldset>
            <h2>Type de produit : <?= ucfirst($articles['type']) ?></h2>
            </fieldset>
            <fieldset>
            <h2>Description : <?= ucfirst($articles['description']) ?></h2>
            </fieldset>
            <fieldset>
            <h2>Genre : <?= ucfirst($articles['genre']) ?></h2>
            </fieldset>
            <fieldset>
            <h2>Pegi : <?= ucfirst($articles['pegi']) ?></h2>
            </fieldset>
            <fieldset>
            <h2>Éditeur : <?= ucfirst($articles['editeur']) ?></Éh2>
            </fieldset>
            <fieldset>
            <h2>Développeur : <?= ucfirst($articles['developpeur']) ?></h2>
            </fieldset>
            <fieldset>
            <h2>Prix : <?= ucfirst($articles['prix']) ?></h2>
            </fieldset>
        </center>
    </div>
</body>
</html>