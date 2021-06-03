<?php require 'config.php'?>
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
<fieldset>
<header id="header">
    <div class="topHeader">
        <div>
            <img width="150px" src="LogoGameOver.png" alt="">
        
        </div>
        <center>
            <fieldset>
                  <h1>GameOver</h1>
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
                <li><a href="login.php">Connexion</a></li>
                <li><a href="register.php">Inscription</a></li>
            </ul>
        </section>
    </fieldset>
    <link href="categories.css" rel="stylesheet">
    <nav class="menu">
		<section class="categorie">
			<h3>PlayStation</h3>
			<ul>
				<li><a href="#">PlayStation 3</a></li>
				<li><a href="#">PlayStation 4</a></li>
				<li><a href="#">PlayStation 5</a></li>
                <li><a href="#">Abonnement PlayStation</a></li>
			</ul>
		</section>
		<section class="categorie">
			<h3>Xbox</h3>
			<ul>
				<li><a href="#">Xbox 360</a></li>
				<li><a href="#">Xbox One</a></li>
				<li><a href="#">Xbox Series X</a></li>
				<li><a href="#">Abonnement Xbox</a></li>
			</ul>
		</section>
		<section class="categorie">
			<h3>Nintendo</h3>
			<ul>
				<li><a href="#">Nintendo 3DS</a></li>
				<li><a href="#">Nintendo Switch</a></li>
				<li><a href="#">Abonnement Nintendo</a></li>
			</ul>
		</section>
		<section class="categorie">
			<h3>PC</h3>
			<ul>
				<li><a href="#">Steam</a></li>
				<li><a href="#">Epic Games</a></li>
                <li><a href="#">Abonnement PC</a></li>
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
                    <td rowspan="3"><?php echo '<img src="img/' . $article['id'] . '.png">'; ?></td>
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