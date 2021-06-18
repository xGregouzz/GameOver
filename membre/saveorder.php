<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Procedure d'achat</title>
</head>
<body>
    <?php
        require_once('../config.php');
    ?>

    <?php
        if (isset($_SESSION['id'])) {
            $req = $connect->query('SELECT * FROM utilisateurs WHERE id = '.$_SESSION['id']);
            $utilisateur = $req->fetch();
        }
    ?>


    <?php
        $date_commande = date('Y-m-d H:i:s');
        if (!isset($_SESSION['client']) || empty($_SESSION['client'])) {
            header('location: ../accueil.php');
        }

        if (isset($_POST) AND !empty($_POST)) {
            if (isset($_SESSION['id']) AND $_POST['email'] === $utilisateur['email']) {
                $req = $connect->prepare('INSERT INTO `commandes` (`utilisateurs`, `date_commande`, `type_paiement`) VALUES (:utilisateurs, :date_commande, :type_paiement)');
                $req->execute([
                    'utilisateurs' => $utilisateur['id'],
                    'date_commande' => $date_commande,
                    'type_paiement' => $_POST['type_paiement'],
                ]);
                echo '<center><h3>Merci pour la commande !!</h3></center>';
                //button
            } else {
            $_SESSION['flash']['error_mail'] = 'Votre email ne correspond pas';
            header('location: checkout.php');
            }
        } else {
            $_SESSION['flash']['error_champs'] = 'Champs manquants';
            header('location: checkout.php');
        }
    ?>  
</body>
</html>