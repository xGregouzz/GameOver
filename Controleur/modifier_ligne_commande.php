<?php
    require_once('../../Modele/modifier_ligne_commande.php');
    $db = connectToDatabase();
    
    function getCommandes($db, $nb = null, $id = null) {
        if ($nb AND !$id) {
            $req = $db->query('SELECT * FROM lignes_commandes LIMIT'.$nb);
            $commandes = $req->fetchAll();
        } else if ($id) {
            $req = $db->query('SELECT * FROM lignes_commandes WHERE id ='.$id);
            $commandes = $req->fetch();
        } else {
            $req = $db->query('SELECT * FROM lignes_commandes');
            $commandes = $req->fetchAll();
        }
        return $commandes;
    };

    if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
        header('location: ../visiteur/accueil.php');
    }

    if (isset($_POST) AND !empty($_POST)) {
        if (!empty($_POST['commandes']) AND !empty($_POST['articles']) AND !empty($_POST['qty'])) {
            insertLignecommande($db);
            echo "<p>"."Commande modifié !".'</p>';
        } else {
            echo "<p>".'Champs manquants !'.'</p>';
        }
    }
?>
