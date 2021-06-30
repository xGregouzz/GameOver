<?php
    require_once('database.php');
    
    function insertCommande($db) {
        $id = $_GET['id'];
        $utilisateur = $_POST['utilisateur'];
        $date = $_POST['date_commande'];
        $mp = $_POST['type_paiement'];

        $insertion = array(
            'utilisateurs' => $utilisateur,
            'date_commande' => $date,
            'type_paiement' => $mp,
        );
        $sql = "UPDATE commandes SET utilisateurs = :utilisateurs, date_commande = :date_commande, type_paiement = :type_paiement WHERE id = $id";
        $req = $db->prepare($sql);
        $req->execute($insertion);
    }
?>