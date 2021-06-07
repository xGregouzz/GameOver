<?php 
require_once('config.php');
?>
<html> 
    <head> 
        <meta charset="utf-8" /> 
        <title>Supprimer Compte</title> 
    </head> 
    <body> 
        <?php
        $sup = "SUPPRIMER";
        if (isset($_SESSION['client']) AND !empty($_SESSION['client'])) {
            if (isset($_SESSION['id'])) {
                $req = $connect->query('SELECT * FROM utilisateurs WHERE id = '.$_SESSION['id']);
                $utilisateur = $req->fetch();
                if(isset($_POST['supprimer']) AND $_POST['supprimer'] === $sup) {  
                    $supression = $connect->query('DELETE FROM utilisateurs WHERE id = '.$_SESSION['id']);
                    header("Location: accueil.php"); 
                    exit; 
                } else if (isset($_POST['confirmer']) AND $_POST['supprimer'] !== $sup) { 
                    $erreur = "<p id='erreur'>Vous vous êtes tromper dans l'écriture de 'SUPPRIMER' dans le champ de texte</p>";
                } else {
                    $erreur = "<p id='erreur'>Veuillez écrire 'SUPPRIMER' dans le champ de texte afin de supprimer votre compte</p>";
                }
            }
        } else {
            header('Location: accueil.php');
        }
        ?> 
        <?php
        if(isset($erreur)) {
            echo $erreur;
        } 
        ?>
        <form method="POST" action=""> 
                <input type="text" id="supprimer" name="supprimer" /> 
                <input type="submit" value="confirmer" name="confirmer" /> 
        </form> 
    </body> 
</html>