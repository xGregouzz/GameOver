<?php 	
	require_once ("data/database.php");
	require_once ("config.php");

try {
	$connection = new PDO($dsn, $username, $password);
	echo ("connecté");
} catch (PDOException $error) {
	echo $sql . "<br>" . $error->getMessage();
}
 
/*
	// $db = connectToDatabase();
	// $database = recupdonnee($db);
*/
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
		$layout = "public/accueil.php";
	} else {
		$content_for_layout = "stock.php";
		$layout = "public/accueil.php";
	}	

	include($layout); 
?>
