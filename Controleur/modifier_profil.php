<?php 
  require_once('../Modele/modifier_profil.php');      
  if (isset($_POST) AND !empty($_POST)) {
    if (!empty($_POST['E-mail']) AND !empty($_POST['Nom']) AND !empty($_POST['Prenom']) AND !empty($_POST['password'])) {
      function insertutilisateurs($db) {
        $id = $_SESSION['id'];
        $insertion = array(
            "nom" => $_POST['Nom'],
            "prenom" => $_POST['Prenom'],
            "email" => $_POST['E-mail'],
            "password" => md5($_POST['password']),
          );
        $sql = "UPDATE utilisateurs
          SET email = :email, password = :password, nom = :nom, prenom = :prenom
          WHERE  id = $id ";

        $req = $db->prepare($sql);
        $req->execute($insertion);
      }

      function recupemail($db){
        $pseudo = htmlspecialchars($_SESSION["id"]);
        $sql = "SELECT email FROM utilisateurs WHERE id =?";
        $sth = $db->prepare($sql);
        $sth->execute(array($pseudo));
        $resultat = $sth->fetch();
        return $resultat[0];
      }

      function recupnom($db){
        $pseudo = htmlspecialchars($_SESSION["id"]);
        $sql = "SELECT nom FROM utilisateurs WHERE id =?";
        $sth = $db->prepare($sql);
        $sth->execute(array($pseudo));
        $resultat = $sth->fetch();
        return $resultat[0];
      }

      function recupprenom($db){
        $pseudo = htmlspecialchars($_SESSION["id"]);
        $sql = "SELECT prenom FROM utilisateurs WHERE id =?";
        $sth = $db->prepare($sql);
        $sth->execute(array($pseudo));
        $resultat = $sth->fetch();
        return $resultat[0];
      }

      function recuppass($db){
        $pseudo = htmlspecialchars($_SESSION["id"]);
        $sql = "SELECT password FROM utilisateurs WHERE id =?";
        $sth = $db->prepare($sql);
        $sth->execute(array($pseudo));
        $resultat = $sth->fetch();
        return $resultat[0];
      }

      $mail = recupemail($db);
      $nom = recupnom($db);
      $prenom = recupprenom($db);
      $password = recuppass($db);
      insertutilisateurs($db);
      header('Location: ../Vue/membre/accueil_membre.php');
    }
  }
?>