<?php

require 'config.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<title>modifier profil d'inscription</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" title="monstyle" href="style.css" />
</head>
<body>

<div id="section">
<div id="article">
<h2>Modifier les donnees d'inscription</h2>

<form method="post" action="">
<p>

<?php
if (isset($_POST['valider']) )
{
  if((!empty($_POST['login'])) && (!empty($_POST['mdp'])) && (!empty($_POST['nom']))
          && (!empty($_POST['prenom'])) && (!empty($_POST['e-mail'])) && (!empty($_POST['date_naissance'])))
  {

    try
    {
      $stmt = $connect->prepare('UPDATE utilisateurs SET nom = :nom, prenom = :prenom, mail =:mail,  mdp = :mdp, date_naissance = :date_naissance, etat= :etat 
            WHERE utilisateurs ="'.$data['etat'] == 'client'.'"');

      $stmt ->execute(array('nom'=>$_POST['nom'], 
                 'prenom'=>$_POST['prenom'], 
                 'date_naissance'=>$_POST['date_naissance'], 
                 'email'=>$_POST['mail'], 
                 'pass'=>md5($_POST['mdp']),							 
                 'client' => $idclient));
                 
                 $data = $stmt->fetch(PDO::FETCH_ASSOC);
                 
                }
                
                catch(PDOException $e) {
                    echo $e->getMessage();
                }
    }
    
    echo '<br/><br/> Informations modifiées avec succès <br/>';

    $stmt->closeCursor();
  }
  else
  {
    echo 'Vous devez remplir tous les champs !';
  }

  ?>
  <br/><br/><a href="profile.php">Retour a la page profil</a>
  
  <?php
  while ($data === $stmt->fetch(PDO::FETCH_ASSOC))
  {
      if(empty($data['etat'] == 'client'))
          header('Location: accueil.php');   
  
  echo 'Bonjour'.' '.$data['login'].'<br/><br/>';
  
   
  echo  'Modifier votre login : '.$data['login'];?><br/>
  <input  type="text" name="login" size="30" /><br/><br/>
  <?php
  echo  'Modifier votre nom : '.$data['nom'] . '<br/>';?>
  <input  type="text" name="nom" size="30" /><br/><br/>
  <?php 
  echo  'Modifier votre prénom : '.$data['prenom'];?><br/>
  <input  type="text" name="prenom" size="30" /><br/><br/>
  <?php 
  echo  'Modifier votre date naiss : '.$data['date_naissance'];?><br/>
  <input  type="text" name="date_naissance" size="30" /><br/><br/>						
  <?php 
  echo  'Modifier votre email : '.$data['mail'];?><br/>
  <input  type="text" name="e-mail" size="30" /><br/><br/>
  <?php
  echo  'Modifier votre mot de passe : '.$data['mdp'];?><br/>
  <input  type="password" name="mdp" size="30" /><br/><br/>
  <input type="submit" name="valider" value="modifier"/>
  </p>
  </form>
  </div>
  <div id="aside">
  <?php
}

?>
</div>
</body>
</html>