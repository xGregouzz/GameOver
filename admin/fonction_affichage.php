<?php

function getArticle($connect, $nb = null, $id = null) {
    if ($nb AND !$id) {
        $req = $connect->query('SELECT * FROM articles LIMIT'.$nb);
        $articles = $req->fetchAll();
    } else if ($id) {
        $req = $connect->query('SELECT * FROM articles WHERE id ='.$id);
        $articles = $req->fetch();
    } else {
        $req = $connect->query('SELECT * FROM articles');
        $articles = $req->fetchAll();
    }
    return $articles;
}
?>