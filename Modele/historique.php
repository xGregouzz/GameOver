<?php
    require_once ('database.php');
    $db = connectToDatabase();

    //Récupération des commandes
    $req = $db->query('SELECT * FROM commandes WHERE utilisateurs = '.$_SESSION['id']);
    $commandes = $req->fetchAll();
?>