<?php
    session_start();
    require_once ('database.php');   
    $db = connectToDatabase();
    $req = $db->query('SELECT * FROM utilisateurs WHERE id = '.$_SESSION['id']);
    $utilisateur = $req->fetch(PDO::FETCH_ASSOC);

    $reponse = $db->query('SELECT prenom, message FROM minichat ORDER BY ID DESC LIMIT 0, 10');
    $reponse->closeCursor();

    function InsertMessage($db) {
        $req = $db->prepare('INSERT INTO minichat (prenom, message) VALUES(?, ?)');
        $req->execute(array(
            $utilisateur['prenom'],
            $_POST['message']
        ));
    }
?>