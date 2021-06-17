<?php 

require_once '../config.php';
        $req = $connect->prepare('SELECT * FROM lignes_commandes WHERE id = '.$_SESSION['id']);
        $req->execute(array(
        'id' => $_SESSION['id']
         ));
        $lc = $req->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Afficher lignes commandes</title>
</head>
<body>
        Id : <?php echo $lc['id']; ?><br>
        Commandes : <?php echo $lc['commandes']; ?> <br>
        Articles : <?php echo $lc['articles']; ?><br>
        Quantité : <?php echo $lc['quantité']; ?><br>
        Prix facture : <?php echo $lc['prix_facture']; ?> <br>
        Type paiement : <?php echo $lc['type_paiement']; ?><br><br>
        <li><a href="accueil_admin.php">Menu principal </a></li>

</body>
</html>