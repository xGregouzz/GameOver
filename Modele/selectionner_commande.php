<?php
    session_start();
    require_once('database.php');
    function recupUser($db) {
        $id = $_POST['id'];
        $req = $db->query('SELECT * FROM utilisateurs WHERE id = '.$id);
        $utilisateur = $req->fetch();
    }
?>