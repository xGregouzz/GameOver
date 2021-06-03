<?php 
require_once('config.php');
?>
<html> 
    <head> 
        <meta charset="utf-8" /> 
        <link rel="stylesheet" href="" /> 
        <title>Supprimer Compte</title> 
    </head> 
    <body> 
            <?php 
            $sup="SUPPRIMER"; 

            if(isset($_SESSION['client'])) { 
                if(isset($_POST['valider'])) { 
                    if($_POST['confirmer'] == $sup) { 
                       $utilisateurs = $_POST['id']; 
                       $supression = $connect->prepare('DELETE * FROM `utilisateurs` WHERE `utilisateurs` . `id` = ?');
                  $supression->execute(array(
                      ':id' => $utilisateurs
                  ));
                       header("Location: accueil.php"); 
                       exit; 
                    } else if(isset($_POST['confirmer']) !== 'SUPPRIMER'){
                  $erreur = '<p id="erreur">Vous devez écrire "SUPPRIMER" !</p>';
               }
                } else { 
                $erreur = '<p id="erreur">Veillez écrire "SUPPRIMER" dans le champ de texte pour supprimer votre compte</p>';
            }
         } else {
            header('Location: accueil_membre.php');
         }
            ?> 
                <?php if(isset($erreur)) { echo $erreur; } ?>
            <form method="POST" action=""> 
                    <input type="text" id="confirmer" name="confirmer" /> 
                    <input type="submit" value="Confirmer" name="valider" /> 
                </form> 
    </body> 
</html>
