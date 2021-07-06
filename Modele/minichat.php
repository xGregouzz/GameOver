<?php
    session_start();
    require_once ('database.php');   
    $db = connectToDatabase();
    
    $reponse = $db->query('SELECT prenom, message FROM minichat');

    function InsertMessage($db) {
        $req = $db->query('SELECT * FROM utilisateurs WHERE id = '.$_SESSION['id']);
        $utilisateur = $req->fetch();
        $req = $db->prepare('INSERT INTO minichat (utilisateurs, prenom, message) VALUES(:utilisateurs, :prenom, :message)');
        $req->execute(array(
            'utilisateurs' => $_SESSION['id'],
            'prenom' => $utilisateur['prenom'],
            'message' => $_POST['message']
        ));
    }
?>