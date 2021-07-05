<?php
    require_once('../Modele/minichat.php');

    if(isset($_POST['message'])) {
        InsertMessage($db);
    }
    
    header('Location: ../index.php?action=Vue/membre/minichat.php');
?>

