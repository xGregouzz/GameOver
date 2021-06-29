<?php
    require_once ('database.php');
    $db = connectToDatabase();
    $req = $db->query('SELECT * FROM articles WHERE `type` = "Nintendo3DS"');
    $articles = $req->fetchAll();
?>