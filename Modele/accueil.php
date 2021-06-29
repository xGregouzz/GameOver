<?php
    require_once ('database.php');
    $db = connectToDatabase();

    $articles = $db->query('SELECT * FROM articles ORDER BY id DESC'); 
    if(isset($_GET['search']) AND !empty($_GET['search'])){
        $recherche = htmlspecialchars($_GET['search']);
        $articles = $db->query('SELECT * FROM articles WHERE nom LIKE "%'.$recherche.'%" ORDER BY id DESC');
    }
?>