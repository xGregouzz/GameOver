<?php
    require_once('../Modele/selectionner_commande.php');
    $db = connectToDatabase("localhost", "root", "", "gameover");
    $id = $_POST['id'];
    if (isset($_SESSION['admin']) AND !empty($_SESSION['admin'])) {
        if (!empty($id)) {
            recupUser($db);
            header('Location: modifier_ligne_commande.php?id='.$_GET['id']);
        } else {
            header('Location: selectionner_commande.php');
        }
    } else {
        header('Location: ../index.php');
    }
?>
