<?php
    require_once ('database.php');
    $db = connectToDatabase();

    //Récupération des lignes_commandes
    $req = $db->query('SELECT * FROM lignes_commandes WHERE commandes = '.$_GET['id']);
    $lignes_commandes = $req->fetchAll();
?>