<?php
    require_once ('database.php');
    $db = connectToDatabase();
    $req = $db->query('SELECT * FROM articles WHERE `type` = "xboxSeriesX"');
    $articles = $req->fetchAll();
?>