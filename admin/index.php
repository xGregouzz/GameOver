<?php 	
require_once 'config.php';
	if (isset($_POST["action"])) {
		switch ($_POST["action"]) {
			case "playstation3.php":
				$content_for_layout ="playstation3.php"; 
				break;
            case "playstation4.php":
				$content_for_layout ="playstation4.php"; 
				break;
            case "playstation5.php":
				$content_for_layout ="playstation5.php"; 
				break;
            case "aboplay.php":
				$content_for_layout ="aboplay.php"; 
				break;
            case "xbox360.php":
				$content_for_layout ="xbox360.php"; 
				break;
            case "xboxone.php":
				$content_for_layout ="xboxone.php"; 
				break;
            case "xboxseriesx.php":
				$content_for_layout ="xboxseriesx.php"; 
				break;
            case "aboxbox.php":
				$content_for_layout ="aboxbox.php"; 
				break;
            case "nintendo3ds.php":
				$content_for_layout ="nintendo3ds.php"; 
				break;
            case "nintendoswitch.php":
				$content_for_layout ="nintendoswitch.php"; 
				break;
            case "abonintendo.php":
				$content_for_layout ="abonintendo.php"; 
				break;
            case "steam.php":
				$content_for_layout ="steam.php"; 
				break;
            case "epicgames.php":
				$content_for_layout ="epicgames.php"; 
				break;
            case "abopc.php":
				$content_for_layout ="abopc.php"; 
				break;
			default: 
				$content_for_layout ="../stock.php";
				break;
		}
		$layout = "accueil_admin.php";
	} else {
		$content_for_layout = "stock.php";
		$layout = "accueil_admin.php";
	}	

	include($layout);
?>
