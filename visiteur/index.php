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
			case "login.php":
				$page ="login.php"; 
				break;
			case "register.php":
				$page ="register.php"; 
				break;
			default: 
				$page ="accueil.php";
		}
	} else {
		$page = "accueil.php";
	}	

	include($page);
?>
