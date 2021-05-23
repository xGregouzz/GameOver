<?php


//Recuperer les donnees
	function recupdonnee($db) {
		$sql = "SELECT * FROM utilisateurs";
		$req = $db->query($sql); 
		$utilisateurs = array();

	while ($data = $req->fetch()) {
		$livre[] = array(
			"id" => $data['id'],
			"etat" => $data['etat'],
			"nom" => $data['nom'],
			"prenom" => $data['prenom'],
			"mail" => $data['mail'],
			"mdp" => $data['mdp'],
			"paiement" => $data['paiement'],
			"date_naissance" => $data['date_naissance']

		);
	}

	$sql = "SELECT * FROM articles";
		$req = $db->query($sql); 
		$articles = array();

		while ($data = $req->fetch()) {
			$articles[] = array(
				"id" => $data['id'],
				"plateforme" => $data['plateforme'],
				"type" => $data['type'],
				"nom" => $data['nom'],
				"genre" => $data['genre'],
				"description" => $data['description'],
				"pegi" => $data['pegi'],
				"editeur" => $data['editeur'],
				"prix" => $data['prix']


			);
	}

	$sql = "SELECT * FROM commandes";
		$req = $db->query($sql); 
		$commandes[] = array();

		while ($data = $req->fetch()) {
			$commandes = array(
				"id" => $data['id'],
				"clients" => $data['clients'],
				"date_commande" => $data['date_commande']
			);
		}

		$database = array(
		  "livre" => $utilisateurs,
		  "articles" => $articles,
		  "commandes" => $commandes
		);
		return $database;

}

	/*
	function checkout($name, $email, $adress, $paymentType, $db) {
		include_once("cart.php");
		include_once("database.php");
		$_cart = findcart();
		
		$insertion = array(
			"name" => $name, 
			"email" => $email, 
			"adress" => $adress,
			"mp" => $paymentType,  
		);

		$sql = "INSERT INTO commandes(name, mail, adress, payment_type) VALUES (:name, :email, :adress, :mp);";
		$req = $db->prepare($sql);
		$req->execute($insertion);


		$database = recupdonnee($db);
		$sql_ligne = "INSERT INTO lignes_commandes(id_commandes, id_livre, quantity, price) VALUES (:id_commandes, :id_livre, :quantity, :price);";
		$req_ligne = $db->prepare($sql_ligne);

		foreach ($_cart["lineitems"] as $key => $item) {
			$insert_ligne = array(
				"id_commandes" => $database['commandes'][count($database['commandes']) - 1]['id'],
				"id_livre" => $item['book']['id'],
				"quantity" => $item['quantity'],
				"price" => $item['book']['price']
			);
			$req_ligne->execute($insert_ligne);
		}
		emptyCart();
	} */
?>