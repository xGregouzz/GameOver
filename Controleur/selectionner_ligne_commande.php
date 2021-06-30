<?php
    require_once('../Modele/selectionner_ligne_commande.php');
    $db = connectToDatabase("localhost", "root", "", "gameover");
    $id = $_POST['id'];
    if (isset($_SESSION['admin']) AND !empty($_SESSION['admin'])) {
        if (!empty($id)) {
            recupUser($db);
            header('Location: ../Vue/admin/modifier_ligne_commande.php?id='.$id);
        } else {
            header('Location: selectionner_ligne_commande.php');
        }
    } else {
        header('Location: ../index.php');
    }
?>
