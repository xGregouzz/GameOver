<?php 
  require_once('../config.php');      
  if (isset($_POST) AND !empty($_POST)) {

  if (!empty($_POST['E-mail']) AND !empty($_POST['Nom']) AND !empty($_POST['Prenom']) AND !empty($_POST['password'])) {
  function insertutilisateurs($connect) {
    $id = $_SESSION['id'];
    $insertion = array(
        "nom" => $_POST['Nom'],
        "prenom" => $_POST['Prenom'],
        "email" => $_POST['E-mail'],
        "password" => $_POST['password'],
      );
    $sql = "UPDATE utilisateurs
      SET email = :email, password = :password, nom = :nom, prenom = :prenom
      WHERE  id = $id ";

    $req = $connect->prepare($sql);
    $req->execute($insertion);
    }
?>


<?php  

function recupemail($connect){
    $pseudo = htmlspecialchars($_SESSION["id"]);
    $sql = "SELECT email FROM utilisateurs WHERE id =?";
    $sth = $connect->prepare($sql);
    $sth->execute(array($pseudo));
    $resultat = $sth->fetch();
    return $resultat[0];
  }
function recupnom($connect){
    $pseudo = htmlspecialchars($_SESSION["id"]);
      $sql = "SELECT nom FROM utilisateurs WHERE id =?";
     $sth = $connect->prepare($sql);
    $sth->execute(array($pseudo));
    $resultat = $sth->fetch();
    return $resultat[0];
  }
  function recupprenom($connect){
    $pseudo = htmlspecialchars($_SESSION["id"]);
      $sql = "SELECT prenom FROM utilisateurs WHERE id =?";
     $sth = $connect->prepare($sql);
    $sth->execute(array($pseudo));
    $resultat = $sth->fetch();
    return $resultat[0];
  }

function recuppass($connect){
  $pseudo = htmlspecialchars($_SESSION["id"]);
    $sql = "SELECT password FROM utilisateurs WHERE id =?";
  $sth = $connect->prepare($sql);
    $sth->execute(array($pseudo));
    $resultat = $sth->fetch();
    return $resultat[0];
  }

$mail = recupemail($connect);
$nom = recupnom($connect);
$prenom = recupprenom($connect);
$password = recuppass($connect);
insertutilisateurs($connect);
header('Location: accueil_membre.php');
      }
  // if(empty($_POST['E-mail']) || empty($_POST['Nom']) || empty($_POST['Prenom']) || empty($_POST['password'])) {
  //   header('Location: ModifierProfil.php');
  // }
}
?>