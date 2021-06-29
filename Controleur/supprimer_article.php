<?php
    require_once '../Modele/supprimer_article.php';
    session_start();

    if (isset($_SESSION['admin']) AND !empty($_SESSION['admin'])) {
        if (isset($_GET['id'])) {
            $req = $db->query('SELECT * FROM articles WHERE id = '.$_GET['id']);
            $article = $req->fetch();
            if ($article) {
                $req = $db->query('DELETE FROM articles WHERE id = '.$_GET['id']);
                header('location: ../Vue/admin/accueil_admin.php');
            } else {
                header('location: ../Vue/admin/accueil_admin.php');
            }
        }
    } else {
        header('location: ../index.php?action=accueil.php');
    }
?>