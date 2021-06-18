<?php 	
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../config.php';
	if (isset($_GET["action"])) { 
		switch ($_GET["action"]) {
			case "playstation3.php":
				$page ="playstation3.php"; 
				break;
            case "playstation4.php":
				$page ="playstation4.php"; 
				break;
            case "playstation5.php":
				$page ="playstation5.php"; 
				break;
            case "aboplay.php":
				$page ="aboplay.php"; 
				break;
            case "xbox360.php":
				$page ="xbox360.php"; 
				break;
            case "xboxone.php":
				$page ="xboxone.php"; 
				break;
            case "xboxseriesx.php":
				$page ="xboxseriesx.php"; 
				break;
            case "aboxbox.php":
				$page ="aboxbox.php"; 
				break;
            case "nintendo3ds.php":
				$page ="nintendo3ds.php"; 
				break;
            case "nintendoswitch.php":
				$page ="nintendoswitch.php"; 
				break;
            case "abonintendo.php":
				$page ="abonintendo.php"; 
				break;
            case "steam.php":
				$page ="steam.php"; 
				break;
            case "epicgames.php":
				$page ="epicgames.php"; 
				break;
            case "abopc.php":
				$page ="abopc.php"; 
				break;
			case "deconnexion.php":
				$page ="deconnexion.php"; 
				break;
			case "desinscrire.php":
				$page ="desinscrire.php"; 
				break;
			case "supprimer_commandes.php":
				$page ="supprimer_commandes.php"; 
				break;
			case 'accueil.php':
				$page = "accueil.php";
				break;
			
			case 'cart.php':
				$page = 'cart.php';
				break;
			case 'addtocart': 
				if (isset($_GET["id"])) {
					include_once("cart.php");
					addToCart($_GET["id"], $connect);
					$page = "panier.php";
				} else {
					$page = "stock.php";
				} 
				break;
			case 'checkout.php':
				$page = "checkout.php";
				break;
			case 'login.php':
				$page = "login.php";
				break;
			case 'panier.php':
				$page = "panier.php";
				break;
			case 'unique_article.php':
				$page = "register.php";
				break;
			case "empty.php":
				include_once("./cart.php");
				emptyCart();
				$page = "panier.php";
				break;
			case "saveorder.php":
				$page = "saveorder.php";
				break;
			default: 
				$page ="accueil_admin.php";
		}
	} else {
		$page = "accueil_admin.php";
	}

	include($page);
?>
