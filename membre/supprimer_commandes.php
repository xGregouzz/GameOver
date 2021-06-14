<?php
require_once '../config.php';
if (isset($_SESSION['admin']) AND !empty($_SESSION['admin'])) {
    if (isset($_GET['id'])) {
        $req_commandes = $connect->query('SELECT * FROM commandes WHERE id = '.$_GET['id']);
        $commande = $req_commandes->fetch();

        $req_lignes_commandes = $connect->query('SELECT * FROM lignes_commandes WHERE id = '.$_GET['id']);
        $ligne_commande = $req_lignes_commandes->fetch();

        if ($ligne_commande AND $commande) {
            $req_lignes_commandes = $connect->query('DELETE FROM lignes_commandes WHERE id = '.$_GET['id']);
            $req_commandes = $connect->query('DELETE FROM commandes WHERE id = '.$_GET['id']);
            header('location: accueil_admin.php');
        } else {
            header('location: accueil_admin.php');
        }
    }
} else if (isset($_SESSION['client']) AND !empty($_SESSION['client'])) {
    if (isset($_GET['id'])) {
        $req_commandes = $connect->query('SELECT * FROM commandes WHERE id = '.$_GET['id']);
        $commande = $req_commandes->fetch();

        $req_lignes_commandes = $connect->query('SELECT * FROM lignes_commandes WHERE id = '.$_GET['id']);
        $ligne_commande = $req_lignes_commandes->fetch();

        if ($ligne_commande AND $commande) {
            $req_lignes_commandes = $connect->query('DELETE FROM lignes_commandes WHERE id = '.$_GET['id']);
            $req_commandes = $connect->query('DELETE FROM commandes WHERE id = '.$_GET['id']);
            header('location: ../membre/accueil_membre.php');
        } else {
            header('location: ../membre/accueil_membre.php');
        }
    }
} else {
    header('location: ../visiteur/accueil.php');
}