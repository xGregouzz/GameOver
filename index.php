<?php 	

	require_once ("database.php");
	$db = connectToDatabase();
	$database = recupdonnee($db);

	if (isset($_GET["action"])) {
		switch ($_GET["action"]) {
			case "stock.php":
				$content_for_layout ="stock.php"; 
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
