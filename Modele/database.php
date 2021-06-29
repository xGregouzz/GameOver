<?php
function connectToDatabase() {
    Try{
        $db=new PDO("mysql:host=localhost;dbname=gameover","root","");
    } Catch(PDOException $e) {
        Echo $e->getMessage();
    }
    return $db;
}

function requestAllData($db) {
  
  $sql = "SELECT * FROM articles";
  $req = $db->query($sql);
  $articles = array();

  while ($d = $req->fetch()) {
    $articles[] =  array(
      "id" => $d['id'],
      "nom" => $d['nom'],
      "plateforme" => $d['plateforme'],
      "type" => $d['type'],
      "genre" => $d['genre'],
      "description" => $d['description'],
      "pegi" => $d['pegi'],
      "editeur" => $d['editeur'],
      "developpeur" => $d['developpeur'], 
      "prix" => $d['prix'],
      "image" => $d['image'] 
    ); 
  }

  $sql = "SELECT * FROM utilisateurs";
  $req = $db->query($sql);
  $utilisateurs = array();

  while ($d = $req->fetch()) {
    $utilisateurs[] =  array(
      "id" => $d['id'],
      "etat" => $d['etat'],
      "prenom" => $d['prenom'],
      "nom" => $d['nom'],
      "date_naissance" => $d['date_naissance'],
      "email" => $d['email'],
      "password" => $d['password'] 
    ); 
  }

  $sql = "SELECT * FROM commandes";
  $req = $db->query($sql);
  $commandes = array();  

  while ($d = $req->fetch()) {
    $commandes[] = array(
      "id" => $d['id'],
      "utilisateurs" => $d['utilisateurs'],
      "date_commande" => $d['date_commande'],
      "type_paiement" => $d['type_paiement'],
    );
  } 

  $sql = "SELECT * FROM lignes_commandes";
  $req = $db->query($sql);
  $lignes_commandes[] = array();  

  while ($d = $req->fetch()) {
    $lignes_commandes = array(
      "id" => $d['id'],
      "commandes" => $d['commandes'],
      "articles" => $d['articles'],
      "qty" => $d['qty'],
      "prix_facture" => $d['prix_facture'],

    );
  }

  $database = array(
    "articles" => $articles,
    "utilisateurs" => $utilisateurs,
    "commandes" => $commandes,
    "lignes_commandes" => $lignes_commandes
  );

  return $database;
}