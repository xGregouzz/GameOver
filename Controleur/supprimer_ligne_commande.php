<?php
    require_once '../Modele/supprimer_ligne_commande.php';
    session_start();
    if (isset($_SESSION['admin']) AND !empty($_SESSION['admin'])) {
        if (isset($_GET['id'])) {
            $req_lignes_commandes = $db->query('SELECT * FROM lignes_commandes WHERE id = '.$_GET['id']);
            $ligne_commande = $req_lignes_commandes->fetch();

            if ($ligne_commande) {
                $req_lignes_commandes = $db->query('DELETE FROM lignes_commandes WHERE id = '.$_GET['id']);
                header('location: ../Vue/admin/accueil_admin.php');
            } else {
                header('Location: ../Vue/admin/modifier_ligne_commande.php?id='.$id);
            }
        }
    } else {
        header('location: ../Vue/visiteur/accueil.php');
    }
?>