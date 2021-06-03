<?php
require_once 'config.php';
if (isset($_SESSION['admin']) AND !empty($_SESSION['admin'])) {
    if (isset($_GET['id'])) {
        $req = $connect->query('SELECT * FROM articles WHERE id = '.$_GET['id']);
        $article = $req->fetch();
        if ($article) {
            $req = $connect->query('DELETE FROM articles WHERE id = '.$_GET['id']);
            header('location:accueil_admin.php');
        } else {
            header('location:accueil_admin.php');
        }
    }
} else {
    header('location: ../accueil.php');
}