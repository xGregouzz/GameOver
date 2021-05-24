<?php
require_once('config.php');
$admin = 'admin@gmail.com';
if($_POST['mail'] == $admin) {
    header('Location: accueil_admin.php'); 
}else {
    header('Location: accueil_membre.php');
}

?>