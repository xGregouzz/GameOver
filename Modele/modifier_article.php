<?php
    require_once('database.php');
    function insertArticle($db) {
        $id = $_GET['id'];
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
        $sql = "UPDATE articles SET nom = :nom, plateforme = :plateforme, type = :type, genre = :genre, description = :description, pegi = :pegi, editeur = :editeur, developpeur = :developpeur, prix = :prix WHERE id = $id ";
        $req = $db->prepare($sql);
        $req->execute($insertion);
    }
?>