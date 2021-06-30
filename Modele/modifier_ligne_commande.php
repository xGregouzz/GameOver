<?php
    require_once('database.php');
    

    function insertLignecommande($db) {
        $req = $db->query('SELECT * FROM articles WHERE id = '.$_POST['articles']);
        $article_posté = $req->fetch();
        $id = $_GET['id'];

        $commandes = $_POST['commandes'];
        $id_article = $_POST['articles'];
        $qty = $_POST['qty'];
        $total = $article_posté['prix'] * $qty;

        $insertion = array(
            'commandes' => $commandes,
            'articles' => $id_article,
            'qty' => $qty,
            'prix_facture' => $total,
        );
        $sql = "UPDATE lignes_commandes SET commandes = :commandes, articles = :articles, qty = :qty, prix_facture = :prix_facture WHERE id = $id";
        $req = $db->prepare($sql);
        $req->execute($insertion);
    }
?>