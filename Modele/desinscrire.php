<?php
    require_once('database.php');
    function recupUser($db) {
        $id = $_SESSION['id'];
        $req = $db->query('SELECT * FROM utilisateurs WHERE id = '.$_SESSION['id']);
        $utilisateur = $req->fetch();
    }

    function supUser($db) {
        $supression = $db->query('DELETE FROM utilisateurs WHERE id = '.$_SESSION['id']);
    }
?>