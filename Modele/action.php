<?php

require_once ('database.php');
$db = connectToDatabase();
session_start();

if(isset($_GET['type'],$_GET['id']) AND !empty($_GET['type']) AND !empty($_GET['id'])) {
    $getid = (int) $_GET['id'];
    $gettype = (int) $_GET['type'];
    

    $sessionid = $_SESSION['id'];
    
    
    $check = $db->prepare('SELECT id FROM articles WHERE id = ?');
    $check->execute(array($getid));
    // $article = $check->fetch();
    // $id = $article['id'];

    if($check->rowCount() == 1){

        if($gettype == 1){
            $check_like = $db->prepare('SELECT id FROM likes WHERE id_article = ? AND id_membre = ?');
            $check_like->execute(array($getid,$sessionid));

            $del = $db->prepare('DELETE FROM dislikes WHERE id_article = ? AND id_membre = ?');
            $del->execute(array($getid,$sessionid));

            if($check_like->rowCount() == 1){
                $del = $db->prepare('DELETE FROM likes WHERE id_article = ? AND id_membre = ?');
                $del->execute(array($getid,$sessionid));
            }else{
                $insert = $db->prepare('INSERT INTO likes (id_article, id_membre) VALUES (?, ?)');
                $insert->execute(array($getid, $sessionid));
            }

            
        }elseif($gettype == 2){
            $check_dislike = $db->prepare('SELECT id FROM dislikes WHERE id_article = ? AND id_membre = ?');
            $check_dislike->execute(array($getid,$sessionid));

            $del = $db->prepare('DELETE FROM likes WHERE id_article = ? AND id_membre = ?');
            $del->execute(array($getid,$sessionid));

            if($check_dislike->rowCount() == 1){
                $del = $db->prepare('DELETE FROM dislikes WHERE id_article = ? AND id_membre = ?');
                $del->execute(array($getid,$sessionid));
            }else{
                $insert = $db->prepare('INSERT INTO dislikes (id_article, id_membre) VALUES (?, ?)');
                $insert->execute(array($getid, $sessionid));
            }
        }
        header('location: ../Vue/membre/afficher_article.php?id='.$getid);
    }else{
        exit('ERREUR fatale');
    }
} else {
    exit('ERREUR fatale. <a href="http://localhost/GameOver/Vue/membre/accueil_membre.php">Revenir a l\'accueil </a>');
}