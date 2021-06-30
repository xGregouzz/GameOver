<?php
    session_start();
    require_once('database.php');
    $db = connectToDatabase();
    $req = $db->query('SELECT * FROM utilisateurs WHERE id = '.$_SESSION['id']);
    $utilisateur = $req->fetch(PDO::FETCH_ASSOC);
?>