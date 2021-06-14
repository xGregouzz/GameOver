<?php
	require '../config.php';

	if(isset($_POST['register'])) {
		$errMsg = '';

		// Get data from FROM
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$mail = $_POST['mail'];
		$date_naissance = $_POST['date_naissance'];
		$mdp = $_POST['mdp'];

		$birth = date_create($_POST["date_naissance"]);
        $birthFormat = date_format($birth, "Y-m-d");
        $age = date('Y') - date_format($birth, "Y");;

    	if (date('md') < date('md', strtotime($birthFormat))) {
                $age -= 1;
        }
		$req = $connect->prepare('SELECT * FROM utilisateurs WHERE mail = :mail');
		$req->execute(array(
			':mail' => $mail
		));
		$data = $req->fetch(PDO::FETCH_ASSOC);

		if($nom == '')
			$errMsg = 'Entrer un nom.';
		if($prenom == '')
			$errMsg = 'Entrer un prénom.';
		if($mdp == '')
			$errMsg = 'Entrer un mot de passe valide.';
		if($date_naissance == '')
			$errMsg = 'Entrer une date de naissance valide.';
		if($mdp == '')
			$errMsg = 'Entrer un mot de passe valide.';
		if($age < 18)
			$errMsg = "Notre site n'accepte pas les mineures.";
		if($mail == $data['mail'])
			$errMsg = 'Ce mail appartient déjà à un compte. <a href="login.php">Connexion</a>';

		if($errMsg == ''){
			try {
				$stmt = $connect->prepare('INSERT INTO utilisateurs (etat, nom, prenom, mail, date_naissance, mdp) VALUES ("client",:nom, :prenom, :mail, :date_naissance, :mdp)');
				$stmt->execute(array(
					':nom' => $nom,
					':prenom' => $prenom,
					':mail' => $mail,
					':date_naissance' => $date_naissance,
					':mdp' => $mdp
					));
				header('Location: register.php?action=joined');
				exit;
			}
			catch(PDOException $e) {
				echo $e->getMessage();
			}
		}
	}

	if(isset($_GET['action']) && $_GET['action'] == 'joined') {
		$errMsg = 'Utilisateur bien enregisté <a href="login.php">Connexion</a>';
	}
?>

<html>
<head><title>Inscription</title></head>
	<style>
	html, body {
		margin: 1px;
		border: 0;
	}
	</style>
<body>
	<div align="center">
		<div style=" border: solid 1px #006D9C; " align="left">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
			<div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b>Inscription</b></div>
			<div style="margin: 15px">
				<form action="" method="post">
					<input type="text" name="nom" placeholder="Nom" value="<?php if(isset($_POST['nom'])) echo $_POST['nom'] ?>" autocomplete="off" class="box"/><br /><br />
					<input type="text" name="prenom" placeholder="Prénom" value="<?php if(isset($_POST['prenom'])) echo $_POST['prenom'] ?>" autocomplete="off" class="box"/><br /><br />
					<input type="text" name="mail" placeholder="Mail" value="<?php if(isset($_POST['mail'])) echo $_POST['mail'] ?>" class="box" /><br/><br />
					<input type="date" name="date_naissance" placeholder="Date de naissance" value="<?php if(isset($_POST['date_naissance'])) echo $_POST['date_naissance'] ?>" class="box" /><br/><br />
					<input type="password" name="mdp" placeholder="Votre mot de passe" value="<?php if(isset($_POST['mdp'])) echo $_POST['mdp'] ?>" autocomplete="off" class="box"/><br /><br />
					<input type="submit" name='register' value="S'inscrire" class='submit'/><br />
				</form>
			</div>
		</div>
	</div>
</body>
</html>
