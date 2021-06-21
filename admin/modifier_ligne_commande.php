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
    require_once '../config.php';
    function getCommandes($connect, $nb = null, $id = null) {
        if ($nb AND !$id) {
            $req = $connect->query('SELECT * FROM lignes_commandes LIMIT'.$nb);
            $commandes = $req->fetchAll();
        } else if ($id) {
            $req = $connect->query('SELECT * FROM lignes_commandes WHERE id ='.$id);
            $commandes = $req->fetch();
        } else {
            $req = $connect->query('SELECT * FROM lignes_commandes');
            $commandes = $req->fetchAll();
        }
        return $commandes;
    };
    // require_once 'fonction_affichage_comm.php';
    $commandes = getCommandes($connect,1, $_GET['id']);

    if (!isset($_GET['id'])) {
        header('location: accueil_admin.php');
    }

    if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
        header('location: ../visiteur/accueil.php');
    }

    if (isset($_POST) AND !empty($_POST)) {
        if (!empty($_POST['commandes']) AND !empty($_POST['articles']) AND !empty($_POST['quantité']) AND !empty($_POST['prix_facture'])) {
            $req = $connect->prepare('UPDATE lignes_commandes SET commandes = :commandes, articles = :articles, quantité = :quantité, prix_facture = :prix_facture WHERE id = :id');
            $req->execute([
                'commandes' => $_POST['commandes'],
                'articles' => $_POST['articles'],
                'quantité' => $_POST['quantité'],
                'prix_facture' => $_POST['prix_facture'],
                'id' => $_GET['id'],
                
            ]);
            $_SESSION['flash']['success'] = 'A posté !';
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
                <li><a href="abopc.php">Abonnement PC</a></li>
			</ul>
		</section>
	</nav>
</header>
<div class="container">
    <center>
        <h3>Modifier ligne commande <?= "Id : " . ' "' .$commandes['commandes']. '"' ?></h3>
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
            <h4>Le numéro de commande :</h4>
            <input id="commandes" type="text" name="commandes" rows="1" cols="30" value="<?= $commandes['commandes'] ?>">
            <h4>Le numéro d'article :</h4>
            <input id="articles" type="text" name="articles" rows="1" cols="30" value="<?= $commandes['articles'] ?>">
            <h4>La quantitée :</h4>
            <input id="quantité" type="text" name="quantité" rows="1" cols="30" value="<?= $commandes['quantité'] ?>">
            <h4>Le prix facture :</h4>
            <input id="prix_facture" type="text" name="prix_facture" rows="1" cols="30" value="<?= $commandes['prix_facture'] ?>">
            </br>
            </br>
            </br>
            <button>Modifier</button>
        </form>
    </center>
</div>
</body>
</html>