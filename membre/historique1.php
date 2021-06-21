<html>
<head>
</head>
<body>
    <h2>Historique d'achat</h2>
    <?php
        require_once('../config.php');

        $req = $connect->query('SELECT * FROM lignes_commandes WHERE commandes = '.$_GET['id']);
        $lignes_commandes = $req->fetchAll();
        foreach ($lignes_commandes as $ligne_commande): ?>

        <h4>Commande n° :</h4>
        <input id="commandes" type="text" name="commandes" rows="1" cols="30" value="<?= $ligne_commande['commandes'] ?>">
        <h4>Article n° :</h4>
        <input id="articles" type="text" name="articles" rows="1" cols="30" value="<?= $ligne_commande['articles'] ?>">
        <h4>Quantité :</h4>
        <input id="quantité" type="text" name="quantité" rows="1" cols="30" value="<?= $ligne_commande['quantité'] ?>">
        <h4>Le prix de la facture en € :</h4>
        <input id="prix_facture" type="text" name="prix_facture" rows="1" cols="30" value="<?= $ligne_commande['prix_facture'] ?>">
        </br></br></br>
        <li><a href="historique.php">Retour</a></li></br>
        <li><a href="accueil_membre.php">Menu principal </a></li>
        </br>
        <?php endforeach ?>
</body>
</html>