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
        require_once('../../Controleur/modifier_commande.php');
        $commandes = getCommandes($db,1, $_GET['id']);
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
                    <li><a href="selectionner_commande.php">Modifier Commande</a></li>
                    <li><a href="selectionner_ligne_commande.php">Modifier Ligne Commande</a></>
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
            <h3>Modifier Commande <?= "Id : " . ' "' .$id. '"' ?></h3>
            <h4>Ne touchez pas le contenu si il n'y a aucun changement</h4>
            <?php
                if (!empty($_POST)) {
                    include_once '../../Controleur/modifier_commande.php';
                }
            ?>
            <form method="post">
                <h4>L'ID du client :</h4>
                <input id="utilisateur" type="number" name="utilisateur" rows="1" cols="30" value="<?= $commandes['utilisateurs'] ?>">
                <h4>La date de commande :</h4>
                <input id="date_commande" type="date" name="date_commande" rows="1" cols="30" value="<?= $commandes['date_commande'] ?>">
                <h4>Le type de paiement :</h4>
                <input list="type" type="text" id="type_paiement" name="type_paiement" value="<?= $commandes['type_paiement'] ?>">
                <datalist id="type">
                    <option value="VISA">
                    <option value="AMEX">
                    <option value="MASTERCARD">
                    <option value="PAYPAL">
                </datalist>
                </br>
                </br>
                </br>
                <button>Modifier</button>
            </form>
            <br>
            <button type="button" class="button"><a href="../../Controleur/supprimer_commande.php?id=<?= $id ?>">Supprimer la Commande</a></button>
            <br>
            <br>
            <br>
        </center>
    </div>
</body>
</html>