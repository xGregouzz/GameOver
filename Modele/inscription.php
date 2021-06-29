<?php 
  function connectToDatabase($host, $username, $password, $dbname) {
    try {
      $pdo = new PDO("mysql:host=$host;dbname=$dbname", "$username","$password");
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
    return $pdo;
  }

  function insertUser($pdo, $hashPass) {
    $sql = "INSERT INTO utilisateurs(prenom, nom, date_naissance, email, password) VALUES (:prenom, :nom, :date_naissance, :email, :password)";
    $req= $pdo->prepare($sql);
    $req->execute(array(
      ":prenom"=>ucfirst(htmlspecialchars($_POST["prenom"])),
      ":nom"=>ucfirst(htmlspecialchars($_POST["nom"])),
      ":date_naissance"=>htmlspecialchars($_POST["date_naissance"]),
      ":email"=>htmlspecialchars($_POST["email"]),
      ":password"=>$hashPass
    ));
  }

  function verifEmail($pdo){
    $email = htmlspecialchars($_POST["email"]);
    $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE email=?");
    $stmt->execute([$email]); 
    $email = $stmt->fetch();
    if ($email) {
      // le nom d'utilisateur existe déjà
      return false;
    } else {
      // le nom d'utilisateur n'existe pas
      return true;
    }
  }
?>