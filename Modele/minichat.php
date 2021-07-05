<?php
    session_start();
    require_once ('database.php');   
    $db = connectToDatabase();
    
    $reponse = $db->query('SELECT prenom, message FROM minichat');

    function InsertMessage($db) {
        $req = $db->query('SELECT * FROM utilisateurs WHERE id = '.$_SESSION['id']);
        $utilisateur = $req->fetch();
        $req = $db->prepare('INSERT INTO minichat (prenom, message) VALUES(?, ?)');
        $req->execute(array(
            $utilisateur['prenom'],
            $_POST['message']
        ));
    }
?>