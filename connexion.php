<?php
    session_start();
    // l4 faire une liaison avec le fichier PDO ou créer une fonction PDO au lieu d'un ficher:
    // include_once '../PDO/config.php';

    if(isset($_POST['mail']) && isset($_POST['password']))
    {
        $email = $_POST['mail'];
        $password = $_POST['password'];

        // A adapter en fonction de la base de données :

        // $check = $bdd->PREPARE('SELECT mail, password FROM utilisateurs WHERE mail = ?');
        // $check->execute(array($email));
        // $data = $check->fetch();
        // $row = $check->rowCount();

        if($row == 1)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                // $password = hash('sha256', $password);
                
                if($data['password'] === $password)
                {
                    $_SESSION['user'] = $data['mail'];
                    header('Location: ../log_out/landing.php');
                }else header('Location: connexion_traitement.php?login_err=password');
            }else header('Location: connexion_traitement.php?login_err=mail');
        }else header('Location: connexion_traitement.php?login_err=already');
    }else header('Location: connexion_traitement.php?');