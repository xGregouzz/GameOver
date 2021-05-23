<?php 	

require 'config.php';

	if (isset($_GET["action"])) {
		switch ($_GET["action"]) {
			case "stock.php":
				$content_for_layout ="stock.php"; 
				break;
			case "connexion.php":
				$content_for_layout ="connexion.php"; 
			default: 
				$content_for_layout ="stock.php";
		}
		$layout = "accueil.php";
	} else {
		$content_for_layout = "stock.php";
		$layout = "accueil.php";
	}	

	include($layout);
?>
