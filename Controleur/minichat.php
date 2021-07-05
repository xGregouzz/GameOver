<?php
    require_once('Modele/minichat.php');

    if(isset($_POST['message'])) {
        InsertMessage($db);
    }
    
    header('Location: minichat.php');
?>

