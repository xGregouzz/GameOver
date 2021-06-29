<?php
    require_once('database.php');
    function insertArticle($db) {
        $insertion = array(
            'nom' => $_POST['nom'],
            'plateforme' => $_POST['plateforme'],
            'type' => $_POST['type'],
            'genre' => $_POST['genre'],
            'description' => $_POST['description'],
            'pegi' => $_POST['pegi'],
            'editeur' => $_POST['editeur'],
            'developpeur' => $_POST['developpeur'],
            'prix' => $_POST['prix'],
        );
        $sql = 'INSERT INTO `articles` (`nom`, `plateforme`, `type`, `genre`, `description`, `pegi`, `editeur`, `developpeur`, `prix`) VALUES (:nom, :plateforme, :type, :genre, :description, :pegi, :editeur, :developpeur, :prix)';
        $req = $db->prepare($sql);
        $req->execute($insertion);
    }
?>