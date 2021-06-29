<?php
    session_start();
    require_once('../../Modele/desinscrire.php');
    $sup = "SUPPRIMER";
    if (isset($_SESSION['admin']) AND !empty($_SESSION['admin'])) {
        if (isset($_SESSION['id'])) {
            $db = connectToDatabase("localhost", "root", "", "gameover");
            recupUser($db);
            if(isset($_POST['supprimer']) AND $_POST['supprimer'] === $sup) {  
                supUser($db);
                header("Location: ../../index.php"); 
                exit; 
            } else if (isset($_POST['confirmer']) AND $_POST['supprimer'] !== $sup) { 
                $erreur = "<p id='erreur'>Vous vous êtes tromper dans l'écriture de 'SUPPRIMER' dans le champ de texte</p>";
            } else {
                $erreur = "<p id='erreur'>Veuillez écrire 'SUPPRIMER' dans le champ de texte afin de supprimer votre compte</p>";
            }
        }
    } else if (isset($_SESSION['client']) AND !empty($_SESSION['client'])) {
        if (isset($_SESSION['id'])) {
            $db = connectToDatabase("localhost", "root", "", "gameover");
            recupUser($db);
            if(isset($_POST['supprimer']) AND $_POST['supprimer'] === $sup) {  
                supUser($db);
                header("Location: ../../index.php"); 
                exit; 
            } else if (isset($_POST['confirmer']) AND $_POST['supprimer'] !== $sup) { 
                $erreur = "<p id='erreur'>Vous vous êtes tromper dans l'écriture de 'SUPPRIMER' dans le champ de texte</p>";
            } else {
                $erreur = "<p id='erreur'>Veuillez écrire 'SUPPRIMER' dans le champ de texte afin de supprimer votre compte</p>";
            }
        }
    } else {
        header('Location: ../../index.php');
    }

    if(isset($erreur)) {
        echo $erreur;
    } 
?> 