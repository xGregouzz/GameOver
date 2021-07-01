<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="../../CSS/accueil_membre.css" rel="stylesheet">
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
                        <p>Bienvenue <?php echo ucfirst ($_SESSION['client']) ?></p>
                    </fieldset>
                </center>
                <nav class="action">
                <section class="categorie">
                    <ul>
                        <li><a href="accueil_membre.php">Accueil</a></li>
                        <li><a href="../../index.php?action=Vue/membre/modifier_profil.php?id=<?= $_SESSION['id']?>">Modifier Profil</a></li>
                        <li><a href="../../index.php?action=Vue/membre/panier.php">Voir mon panier</a></li>
                        <li><a href="../../index.php?action=Vue/membre/historique.php">Historique d'Achat</a></li>
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
				<li><a href="../../index.php?action=Vue/membre/playstation5.php">PlayStation 5</a></li>
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
        <?php
         $likes = $db->prepare('SELECT id FROM likes WHERE id_article = ?');
         $likes->execute(array($id)); 
         $likes = $likes->rowCount();
 
         $dislikes = $db->prepare('SELECT id FROM dislikes WHERE id_article = ?');
         $dislikes->execute(array($id)); 
         $dislikes = $dislikes->rowCount();
        ?>
    </div>
    <br>
    <a href="../../index.php?action=addtocart&id=<?php echo $articles["id"] ?>">Ajouter au panier</a></td>
    &nbsp;&nbsp;&nbsp;
    <a style="text-decoration:none;" href="../../Modele/action.php?type=1&id=<?php echo $id ?>">👍</a> (<?= $likes ?>) <a style="text-decoration:none;" href="../../Modele/action.php?type=2&id=<?php echo $id ?>">👎</a> (<?= $dislikes ?>)
    <br>
    
</body>
</html>