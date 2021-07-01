<html>
<head>
</head>
<body>
    <center>
        <h2>Historique d'achat</h2>
        <br>
    </center>
    <?php
        require_once('../../Modele/historique.php');
        foreach ($commandes as $commande): 
    ?>
    <center>
        <p>Commande n° <?= $commande['id'] ?> acheté le <?= $commande['date_commande'] ?></p>
        <p><a href="../../Vue/membre/historique_lignes_commandes.php?id=<?= $commande['id'] ?>">Voir plus</a></p>
    </center>
    <?php endforeach ?>
    <center>
        <br>
        <br>
        <a href="accueil_membre.php">Menu principal</a>
    </center>
</body>
</html>