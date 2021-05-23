<?php
	require 'config.php';

	if(isset($_POST['login'])) {
		$errMsg = '';
		$mail = $_POST['mail'];
		$mdp = $_POST['mdp'];

		if($mail == '')
			$errMsg = 'Enter email';
		if($mdp == '')
			$errMsg = 'Enter mdp';

		if($errMsg == '') {
			try {
				$stmt = $connect->prepare('SELECT id, nom, mdp,mail FROM Utilisateurs WHERE mail = :mail');
				$stmt->execute(array(
				':mail' => $mail
					));
				$data = $stmt->fetch(PDO::FETCH_ASSOC);

				if($data == false){
					$errMsg = "l'utilisateur $mail n'existe pas.";
				}
				else {
					if($mdp == $data['mdp']) {
						$_SESSION['nom'] = $data['nom'];
						$_SESSION['mail'] = $data['mail'];
						$_SESSION['mdp'] = $data['mdp'];


						header('Location: accueil.php');
						exit;
					}
					else
						$errMsg = 'Le mot de passe ne correspond pas.';
				}
			}
			catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
		}
	}
?>

<html>
<head><title>Login</title></head>
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
			<div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b>Login</b></div>
			<div style="margin: 15px">
				<form action="" method="post">
					Email : <input type="text" name="mail" value="<?php if(isset($_POST['mail'])) echo $_POST['mail'] ?>" autocomplete="off" class="box"/><br /><br />
					Mot De Passe : <input type="password" name="mdp" value="<?php if(isset($_POST['mdp'])) echo $_POST['mdp'] ?>" autocomplete="off" class="box" /><br/><br />
					<input type="submit" name='login' value="Login" class='submit'/><br />
				</form>
			</div>
		</div>
	</div>
</body>
</html>
