<?php
    require_once ('database.php');
    $db = connectToDatabase();
    $req = $db->query('SELECT * FROM articles WHERE `type` = "Steam"');
    $articles = $req->fetchAll();
?>