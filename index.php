<?php
    require_once("config.php");

    if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            case 'accueil_membre.php':
                $content = "accueil_membre.php";
                break;

            case 'accueil.php':
                $content = "accueil.php";
                break;


            case 'cart.php':
                $content = 'cart.php';
                break;
 
            case 'addToCart':
                if (isset($_GET["id"])) {
                    include_once("cart.php");
                    addToCart($_GET["id"], $connect);
                    $content = "panier.php";
                } else {
                    $content = "accueil_membre.php";
                }
                break;

            case 'checkout.php':
                $content = "checkout.php";
                break;

			case 'deconnexion.php':
				$content = "deconnexion.php";
				break;

			case 'desinscrire.php':
				$content = "desinscrire.php";
				break;
			
			case 'login.php':
				$content = "login.php";
				break;
			
			case 'panier.php':
				$content = "panier.php";
				break;
			
			case 'register.php':
				$content = "register.php";
				break;

			case 'unique_article.php':
				$content = "register.php";
				break;
				

            case "empty.php":
                include_once("./cart.php");
                emptyCart();
                $content = "showcart.php";
                break;
            
            case "saveorder":
                if (isset($_POST["nom"]) AND isset($_POST["mail"]) AND isset($_POST["adresse"]) AND isset($_POST["mp"])) {
                    include_once("config.php");
                    $nom = $_POST['nom'];
                    $mail = $_POST['mail'];
                    $adr = $_POST['adresse'];
                    $mp = $_POST['mp'];
                    checkout($nom, $mail, $adr, $mp, $connect);
                    $content = "saveorder.php";
                    break;
                } else {    
                    $content = "checkout.php";
                    break;
                }   
            
            default:
                $content = "accueil.php";
        }
		
        //session_start();

	} else {
        $content = 'accueil.php';
    }

    include($content);
	
?>