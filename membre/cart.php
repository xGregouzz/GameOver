<?php  
	/* 
		Ce fichier définit la structure d'un panier. Il permet également de manipuler et de persister le panier courant de l'utilisateur
			Un panier est un tableau associatif contenant les éléments.
			- "lineitems" => tableau de l'ensemble des lignes de commandes pour le client courant.
			
		###Attention###
			Nous n'ajoutons pas directement les articles dans le panier. En effet nous traitons des commandes et pour cela nous ajoutons des lignes de commandes dans le panier.
			
		Une ligne de commande (lineitem) représente un article dans la commande. C'est un tableau associatif contenant les éléments suivants:
			- "quantity" => quantité de l'exemplaire du livre commandé
			- "articles" => l'article commandé

		Si deux éléments sont mis dans le panier, le panier ressemblera donc à :
		$cart[« lineitems »][0][« quantity »]
		$cart[« lineitems »][0][« articles»]

		$cart[« lineitems »][1][« quantity »]
		$cart[« lineitems »][1][« articles »]
	*/

	// ----------------------------------------------------------------------------------------------------

	/*
		Retourne le panier d'achat courant pour l'utilisateur de la session courante. Si le panier d’achat n’a jamais été créé, créé un nouveau panier. Stockage du panier dans la session : $_SESSION[« cart »]
		entrées:	aucune
		sorties: 	une référence vers le panier
	*/

	function &findcart() {
		if (!isset($_SESSION['cart'])) {
			$lineitems = array();
			$_SESSION['cart'] = array("lineitems" => $lineitems);
		}
		return $_SESSION['cart'];
	}

	/*
		Ajoute une ligne de commande dans le panier pour un article encore non commandé.
		entrées:	
			$articles, l'article  à rajouter
			$cart, le panier dans lequel rajouter la ligne
		sorties:		aucune
	*/
	
	function addNewArticlesToCart($articles) {
		$cart =& findcart();
		$add = array('quantity' => 1, 'articles' => $articles);
		$cart['lineitems'][] = $add;
	}

	/*
		Ajoute un article au panier. Cherche dans le panier courant si l'article existe.
		Si oui alors augmente la quantité commandée de 1 pour ce livre. 
		Sinon alors crée une nouvelle ligne de commande pour cet article dans le panier.
		entrées:	$articles, l'article à rajouter
		sorties:	aucune
	*/

	function addArticlesToCart($articles) {
		$cart =& findcart();
		foreach ($cart['lineitems'] as $key => $value) {
			if ($value['articles']['id'] == $articles['id']) {
			//if ($value['articles']['id'] == $articles) {
				$cart['lineitems'][$key]['quantity'] += 1;
				return;
			}
		}
		addNewArticlesToCart($articles);
	}

	/*
		Ajoute  un article au panier. La structure d'un article est définie dans book.php
		Si le livre est déjà présent dans le panier alors nous augmentons de un la quantité.
		entrées: 	$bookid le numéro d'identifiant du  livre à ajouter au panier.
		sorties: 	aucune
	*/

	function addToCart($articlesId, $connect) {
		//echo $articlesId; die;
		//include_once("articles.php");
		//$articles = findArticles($articlesId, $connect);
		include_once("fonction_affichage.php");
		$articles = getArticle($connect,1, $articlesId);
		addArticlesToCart($articles);
	}

	/* 
		Retourne le prix total du panier (somme des prix des articles)
		entrées: 	aucune
		sorties: 	prix total des articles du panier
	*/

	function cartTotalPrice() {
		$total = 0;
		$cart = findcart();
		foreach ($cart['lineitems'] as $key => $item) {
			$total += $item['articles']['prix'] * $item['quantity'];
		}
		return $total;
	}

	/* 
		Vide le panier
		entrées: 	aucune
		sorties: 	aucune
	*/

	function emptyCart() {
		unset($_SESSION['cart']);
	}

	/* 
    Enregistre la commande dans un fichier nommé 
    nom_timestamp.txt
    Vous inscrirez : les coordonnées du client, et les informations de la commande
    Entrée :     
        $name    nom du client
        $email email du client
        $adress adresse du client
        $paymenttype mode de paiement
    Sortie :        aucunes
	*/

	
?>