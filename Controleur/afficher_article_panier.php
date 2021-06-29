<?php
    require_once('Modele/afficher_article.php');

    function getArticle($db, $nb = null, $id = null) {
        if ($nb AND !$id) {
            $req = $db->query('SELECT * FROM articles LIMIT'.$nb);
            $articles = $req->fetchAll();
        } else if ($id) {
            $req = $db->query('SELECT * FROM articles WHERE id ='.$id);
            $articles = $req->fetch();
        } else {
            $req = $db->query('SELECT * FROM articles');
            $articles = $req->fetchAll();
        }
        return $articles;
    }
?>