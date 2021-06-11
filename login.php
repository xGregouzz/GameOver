<?php
	require 'config.php';

	if(isset($_POST['login'])) {
		$errMsg = '';
		$mail = htmlspecialchars($_POST['mail']);
		$mdp = htmlspecialchars($_POST['mdp']);

		if($mail == '')
			$errMsg = 'Entrer votre email';
		if($mdp == '')
			$errMsg = 'Entrer votre mot de passe';

		if($errMsg == '') {
			try {
				$req = $connect->prepare('SELECT * FROM utilisateurs WHERE mail = :mail');
				$req->execute(array(
					':mail' => $mail
				));
				$data = $req->fetch(PDO::FETCH_ASSOC);

				if($data == false) {
					$errMsg = "Le mot de passe ou l'email est incorrect.";
				} else {
					if($mdp == $data['mdp'] AND $data['etat'] == 'client') {
						$_SESSION['client'] = $data['nom'];
						$_SESSION['id'] = $data['id'];
						header('Location: accueil_membre.php');
					} else if ($mdp == $data['mdp'] AND $data['etat'] == 'admin') {
						$_SESSION['admin'] = $data['nom'];
						$_SESSION['id'] = $data['id'];
						header('Location: admin/accueil_admin.php');
					} else {
						$errMsg = "Le mot de passe ou l'email est incorrect.";
					}
				}
			}
			catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
		}
	}
?>

<html>
<head><title>Se Connecter</title></head>
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
			<div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b>Connexion</b></div>
			<div style="margin: 15px">
				<form action="" method="post">
					Email : <input type="text" name="mail" value="<?php if(isset($_POST['mail'])) echo $_POST['mail'] ?>" autocomplete="off" class="box"/><br /><br />
					Mot De Passe : <input type="password" name="mdp" value="<?php if(isset($_POST['mdp'])) echo $_POST['mdp'] ?>" autocomplete="off" class="box" /><br/><br />
					<input type="submit" name='login' value="Se connecter" class='submit'/><br />
				</form>
			</div>
		</div>
	</div>
</body>
</html>
