<?php 
    session_start();
    require_once ("database.php");
    $db = connectToDatabase();
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars(md5($_POST['password']));
    $req = $db->query("SELECT * FROM utilisateurs WHERE email = '$email'");
    $data = $req->fetch(PDO::FETCH_ASSOC);
?>
