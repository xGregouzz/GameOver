<?php 	

	require_once ("database.php");
	$db = connectToDatabase();
	$database = recupdonnee($db);

	if (isset($_POST["action"])) {
		switch ($_POST["action"]) {
			case "stock.php":
				$content_for_layout ="stock.php"; 
				break;
			case "connexion.php":
				$content_for_layout ="connexion.php"; 
				break;
			default: 
				$content_for_layout ="stock.php";
				break;
		}
		$layout = "accueil.php";
	} else {
		$content_for_layout = "stock.php";
		$layout = "accueil.php";
	}	

	include($layout);
?>
