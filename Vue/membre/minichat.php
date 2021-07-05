<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
    </head>
    <style>
    form
    {
        text-align:center;
    }
    </style>
    <body>
    <?php
        require_once('Modele/minichat.php');
    ?>
    <form action="Controleur/minichat.php" method="post">
        <p>
        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />
        <br>
        <input type="submit" value="Envoyer" />
	</p>
    </form>
    <?php
        while ($donnees = $reponse->fetch())
        {
            echo '<p><strong>' . htmlspecialchars($donnees['prenom']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
        }
    ?>
    <a href="Vue/membre/accueil_membre.php">Retour</a>


    </body>
</html>