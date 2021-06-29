<?php
    require_once('../../Modele/ajouter_article.php');

    if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
        header('location: ../visiteur/accueil.php');
    }

    if (isset($_POST) AND !empty($_POST)) {
        if (!empty($_POST['nom']) AND !empty($_POST['plateforme']) AND !empty($_POST['type']) AND !empty($_POST['genre']) AND !empty($_POST['description']) AND !empty($_POST['pegi']) AND !empty($_POST['editeur']) AND !empty($_POST['developpeur']) AND !empty($_POST['prix'])) {
            $db = connectToDatabase("localhost", "root", "", "gameover");
            insertArticle($db);
            echo "<p>"."Article posté !".'</p>';
        } else {
            echo "<p>".'Champs manquants !'.'</p>';
        }
    }
?>
