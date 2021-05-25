<?php
require_once('config.php');
echo "Vous vous êtes connectés avec succès".$_SESSION['user']."!";

if(isset($_POST['mail']) && isset($_POST['mdp'])) {
    $email = $_POST['mail'];   
    $mdp = $_POST['mdp'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if($data['mdp'] === $mdp) {
            $_SESSION['user'] = $data['mail'];
            header('Location: accueil.php');
        } else {
            header('Location: connexion.php?login_err=mdp');
        }
    }
}

?>