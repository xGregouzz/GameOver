<?php 
    require_once ("database.php");
    $date_commande = date('Y-m-d H:i:s');
    $db = connectToDatabase();
    $id = $_SESSION['id'];
    $req = $db->query("SELECT * FROM utilisateurs WHERE id = '$id'");
    $utilisateur = $req->fetch(PDO::FETCH_ASSOC);
?>
