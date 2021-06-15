<?php 	
require_once '../config.php';
	if (isset($_POST["action"])) {
		switch ($_POST["action"]) {
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
			case 'addToCart':
				if (isset($_GET["id"])) {
					include_once("cart.php");
					addToCart($_GET["id"], $connect);
					$page = "panier.php";
				} else {
					$page = "accueil_membre.php";
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
				$page = "showcart.php";
				break;
			case "saveorder":
				if (isset($_POST["nom"]) AND isset($_POST["mail"]) AND isset($_POST["adresse"]) AND isset($_POST["mp"])) {
					include_once("config.php");
					$nom = $_POST['nom'];
					$mail = $_POST['mail'];
					$adr = $_POST['adresse'];
					$mp = $_POST['mp'];
					checkout($nom, $mail, $adr, $mp, $connect);
					$page = "saveorder.php";
					break;
				} else {    
					$page = "checkout.php";
					break;
				}   
	
			default: 
				$page ="accueil_membre.php";
		}
	} else {
		$page = "accueil_admin.php";
	}	

	include($page);
?>
