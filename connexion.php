<?php
    session_start();
    require_once('database.php');
    connectToDatabase();
    // l4 faire une liaison avec le fichier PDO ou créer une fonction PDO au lieu d'un ficher:
    // include_once '../PDO/config.php';
    echo "Vous vous êtes connectés avec succès".$_SESSION['user']."!";

    if(isset($_POST['mail']) && isset($_POST['mdp']))
    {
        $email = $_POST['mail'];
        $mdp = $_POST['mdp'];

        // A adapter en fonction de la base de données :

        // $check = $bdd->PREPARE('SELECT mail, mdp FROM utilisateurs WHERE mail = ?');
        // $check->execute(array($email));
        // $data = $check->fetch();
        // $row = $check->rowCount();



        if($row == 1)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                // $mdp = hash('sha256', $mdp);
                
                if($data['mdp'] === $mdp)
            
                {
                    $_SESSION['user'] = $data['mail'];
                    header('Location: accueil.php');
                }else header('Location: connexion_traitement.php?login_err=mdp');
            }else header('Location: connexion_traitement.php?login_err=mail');
        }else header('Location: connexion_traitement.php?login_err=already');
    }else header('Location: connexion_traitement.php?');

?>