<html>
<head>
</head>
<body>
    <h2>Historique d'achat</h2>
    <?php
        require_once('../config.php');

        $req = $connect->query('SELECT * FROM commandes WHERE utilisateurs = '.$_SESSION['id']);
        $commandes = $req->fetchAll();
        foreach ($commandes as $commande): ?>
        <p>commande n° <?= $commande['id'] ?> acheté le <?= $commande['date_commande'] ?></p>
        <a href="historique1.php?id=<?= $commande['id'] ?>">Voir plus</a></td>
        <?php endforeach ?>
</body>
</html>