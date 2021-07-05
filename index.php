<?php
    require_once ('Modele/database.php');
    $db = connectToDatabase();
    $database = requestAllData($db);

    if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            //Visiteur
            case 'Vue/visiteur/accueil.php':
                $page = 'Vue/visiteur/accueil.php';
                break;

             case 'Vue/visiteur/login.php':
                session_start();
                $page = 'Vue/visiteur/login.php';
                break;

            case 'Vue/visiteur/inscription.php':
                session_start();
                $page = 'Vue/visiteur/inscription.php';
                break;

            case 'Vue/visiteur/connexion.php':
                session_start();
                $page = 'Vue/visiteur/connexion.php';
                break;

            case 'Vue/visiteur/playstation3.php':
                session_start();
				$page = 'Vue/visiteur/playstation3.php'; 
				break;

            case 'Vue/visiteur/playstation4.php':
                session_start();
				$page = 'Vue/visiteur/playstation4.php'; 
				break;

            case 'Vue/visiteur/playstation5.php':
                session_start();
				$page = 'Vue/visiteur/playstation5.php'; 
				break;

            case 'Vue/visiteur/aboplay.php':
                session_start();
				$page = 'Vue/visiteur/aboplay.php'; 
				break;

            case 'Vue/visiteur/xbox360.php':
                session_start();
				$page = 'Vue/visiteur/xbox360.php'; 
				break;

            case 'Vue/visiteur/xboxone.php':
                session_start();
				$page = 'Vue/visiteur/xboxone.php'; 
				break;

            case 'Vue/visiteur/xboxseriesx.php':
                session_start();
				$page = 'Vue/visiteur/xboxseriesx.php'; 
				break;

            case 'Vue/visiteur/aboxbox.php':
                session_start();
				$page = 'Vue/visiteur/aboxbox.php'; 
				break;

            case 'Vue/visiteur/nintendo3ds.php':
                session_start();
				$page = 'Vue/visiteur/nintendo3ds.php'; 
				break;

            case 'Vue/visiteur/nintendoswitch.php':
                session_start();
				$page = 'Vue/visiteur/nintendoswitch.php'; 
				break;

            case 'Vue/visiteur/abonintendo.php':
                session_start();
				$page = 'Vue/visiteur/abonintendo.php'; 
				break;

            case 'Vue/visiteur/steam.php':
                session_start();
				$page = 'Vue/visiteur/steam.php'; 
				break;

            case 'Vue/visiteur/epicgames.php':
                session_start();
				$page = 'Vue/visiteur/epicgames.php'; 
				break;
            //Membre
            case 'Vue/membre/accueil_membre.php':
                $page = 'Vue/membre/accueil_membre.php';
                break;

            case 'Vue/membre/playstation3.php':
                session_start();
				$page = 'Vue/membre/playstation3.php'; 
				break;

            case 'Vue/membre/playstation4.php':
                session_start();
				$page = 'Vue/membre/playstation4.php'; 
				break;

            case 'Vue/membre/playstation5.php':
                session_start();
				$page = 'Vue/membre/playstation5.php'; 
				break;

            case 'Vue/membre/aboplay.php':
                session_start();
				$page = 'Vue/membre/aboplay.php'; 
				break;

            case 'Vue/membre/xbox360.php':
                session_start();
				$page = 'Vue/membre/xbox360.php'; 
				break;

            case 'Vue/membre/xboxone.php':
                session_start();
				$page = 'Vue/membre/xboxone.php'; 
				break;

            case 'Vue/membre/xboxseriesx.php':
                session_start();
				$page = 'Vue/membre/xboxseriesx.php'; 
				break;

            case 'Vue/membre/aboxbox.php':
                session_start();
				$page = 'Vue/membre/aboxbox.php'; 
				break;

            case 'Vue/membre/nintendo3ds.php':
                session_start();
				$page = 'Vue/membre/nintendo3ds.php'; 
				break;

            case 'Vue/membre/nintendoswitch.php':
                session_start();
				$page = 'Vue/membre/nintendoswitch.php'; 
				break;

            case 'Vue/membre/abonintendo.php':
                session_start();
				$page = 'Vue/membre/abonintendo.php'; 
				break;

            case 'Vue/membre/steam.php':
                session_start();
				$page = 'Vue/membre/steam.php'; 
				break;

            case 'Vue/membre/epicgames.php':
                session_start();
				$page = 'Vue/membre/epicgames.php'; 
				break;
            
            case 'panier.php':
                session_start();
                $page = 'Vue/membre/panier.php';
                break;
 
            case 'addtocart':
                if (isset($_GET["id"])) {
                    session_start();
                    include_once("Controleur/cart.php");
                    addToCart($_GET["id"], $db);
                    $page = "Vue/membre/panier.php";
                }
                break;

            case "empty.php":
                session_start();
                include_once("Controleur/cart.php");
                emptyCart();
                $page = "Vue/membre/panier.php";
                break;

            case "checkout.php":
                $page = "Vue/membre/checkout.php";
                break;
                
            case "Vue/membre/minichat.php":
                $page = "Vue/membre/minichat.php";
                break;
            
            case "saveorder.php":
                session_start();
                if (isset($_POST["email"]) AND isset($_POST["type_paiement"]) AND $_POST["email"] === $_SESSION['email']) {
                    include_once("Controleur/saveorder.php");
                    $db = connectToDatabase("localhost", "root", "", "gameover");
                    $email = $_POST['email'];
                    $type_paiement = $_POST['type_paiement'];
                    saveorder($email, $type_paiement, $db);
                    $page = "Vue/membre/saveorder.php";
                    break;
                } else {            
                    $page = "Vue/membre/checkout.php";
                    echo 'Champs erronés';
                    break;
                }
            //Admin
            case 'Vue/admin/accueil_admin.php':
                $page = 'Vue/admin/accueil_admin.php';
                break;

            case 'Vue/admin/playstation3.php':
                session_start();
				$page = 'Vue/admin/playstation3.php'; 
				break;

            case 'Vue/admin/playstation4.php':
                session_start();
				$page = 'Vue/admin/playstation4.php'; 
				break;

            case 'Vue/admin/playstation5.php':
                session_start();
				$page = 'Vue/admin/playstation5.php'; 
				break;

            case 'Vue/admin/aboplay.php':
                session_start();
				$page = 'Vue/admin/aboplay.php'; 
				break;

            case 'Vue/admin/xbox360.php':
                session_start();
				$page = 'Vue/admin/xbox360.php'; 
				break;

            case 'Vue/admin/xboxone.php':
                session_start();
				$page = 'Vue/admin/xboxone.php'; 
				break;

            case 'Vue/admin/xboxseriesx.php':
                session_start();
				$page = 'Vue/admin/xboxseriesx.php'; 
				break;

            case 'Vue/admin/aboxbox.php':
                session_start();
				$page = 'Vue/admin/aboxbox.php'; 
				break;

            case 'Vue/admin/nintendo3ds.php':
                session_start();
				$page = 'Vue/admin/nintendo3ds.php'; 
				break;

            case 'Vue/admin/nintendoswitch.php':
                session_start();
				$page = 'Vue/admin/nintendoswitch.php'; 
				break;

            case 'Vue/admin/abonintendo.php':
                session_start();
				$page = 'Vue/admin/abonintendo.php'; 
				break;

            case 'Vue/admin/steam.php':
                session_start();
				$page = 'Vue/admin/steam.php'; 
				break;

            case 'Vue/admin/epicgames.php':
                session_start();
				$page = 'Vue/admin/epicgames.php'; 
				break;

            default:
                $page = 'Vue/visiteur/accueil.php';
        }
    } else {
        $page = 'Vue/visiteur/accueil.php';
    }
    include($page);
?>