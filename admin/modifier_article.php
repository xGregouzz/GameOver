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

    if (!isset($_GET['id'])) {
        header('location: accueil_admin.php');
    }

    if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
        header('location: ../accueil.php');
    }

    if (isset($_POST) AND !empty($_POST)) {
        if (!empty($_POST['nom']) AND !empty($_POST['plateforme']) AND !empty($_POST['type']) AND !empty($_POST['genre']) AND !empty($_POST['description']) AND !empty($_POST['pegi']) AND !empty($_POST['editeur']) AND !empty($_POST['developpeur']) AND !empty($_POST['prix'])) {
            $req = $connect->prepare('UPDATE articles SET nom = :nom, plateforme = :plateforme, type = :type, genre = :genre, description = :description, pegi = :pegi, editeur = :editeur, developpeur = :developpeur, prix = :prix WHERE id = :id');
            $req->execute([
                'nom' => $_POST['nom'],
                'plateforme' => $_POST['plateforme'],
                'type' => $_POST['type'],
                'genre' => $_POST['genre'],
                'description' => $_POST['description'],
                'pegi' => $_POST['pegi'],
                'editeur' => $_POST['editeur'],
                'developpeur' => $_POST['developpeur'],
                'prix' => $_POST['prix'],
                'id' => $_GET['id'],
            ]);
            $_SESSION['flash']['success'] = 'Article posté !';
        } else {
            $_SESSION['flash']['error'] = 'Champs manquants !';
        }
    }
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
                <li><a href="abopc.php">Abonnement PC</a></li>
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
            if (isset($_SESSION['flash']['success'])) {
                echo "<div class='success'>".$_SESSION['flash']['success'].'</div>';
            } else if (isset($_SESSION['flash']['error'])) {
                echo "<div class='error'>".$_SESSION['flash']['error'].'</div>';
            }
        }
        ?>
        <form method="post">
            <h4>Le nom :</h4>
            <textarea id="nom" name="nom" rows="1" cols="30" value="<?= $articles['nom'] ?>"></textarea>
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
            <textarea id="description" name="description" rows="11" cols="40" value="<?= $articles['description'] ?>"></textarea>
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