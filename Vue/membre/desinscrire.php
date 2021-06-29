<html> 
    <head> 
        <meta charset="utf-8" /> 
        <title>Supprimer Compte</title> 
    </head> 
    <body> 
        <?php
            include_once('../../Controleur/desinscrire.php')
        ?>
        <form method="POST"> 
                <input type="text" id="supprimer" name="supprimer" /> 
                <input type="submit" value="confirmer" name="confirmer" /> 
        </form> 
    </body> 
</html>