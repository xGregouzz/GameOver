<?php
    function saveorder($email, $type_paiement, $db) {
		include_once("Controleur/cart.php");
		include_once("Modele/database.php");
        include_once("Modele/saveorder.php");
		$_cart = findcart();
        
        $insertion = array (
            'utilisateurs' => $id,
            'date_commande' => $date_commande,
            'type_paiement' => $type_paiement,
        );

        $sql = 'INSERT INTO commandes(utilisateurs, date_commande, type_paiement) VALUES (:utilisateurs, :date_commande, :type_paiement)';
        $req = $db->prepare($sql);
        $req->execute($insertion);

        $database = requestAllData($db);
        $sql_ligne = "INSERT INTO lignes_commandes(commandes, articles, qty, prix_facture) VALUES (:commandes, :articles, :qty, :prix_facture)";
        $req_ligne = $db->prepare($sql_ligne);

        foreach ($_cart["lineitems"] as $key => $item) {
            $total = $item['qty'] * $item['articles']['prix'];
            $insert_ligne = array(
                "commandes" => $database['commandes'][count($database['commandes']) - 1]['id'],
                "articles" => $item['articles']['id'],
                "qty" => $item['qty'],
                "prix_facture" => $total,
            );
            $req_ligne->execute($insert_ligne);
        }
        emptyCart();
    }
?>