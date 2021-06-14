<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="NoS1gnal"/>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>Connexion</title>
</head>
<body>
<div class="login-form">
	<?php
	require '../config.php';
	if(isset($_POST['login'])) {
		$errMsg = '';
		$email = htmlspecialchars($_POST['email']);
		$password = htmlspecialchars($_POST['password']);

		if($errMsg == '') {
			try {
				$req = $connect->prepare('SELECT * FROM utilisateurs WHERE email = :email');
				$req->execute(array(
					':email' => $email
				));
				$data = $req->fetch(PDO::FETCH_ASSOC);

				if($data == false) {
					$errMsg = "Le mot de passe ou l'email est incorrect.";
				} else {
					if($password == $data['password'] AND $data['etat'] == 'client') {
						$_SESSION['client'] = $data['prenom'];
						$_SESSION['id'] = $data['id'];
						header('Location: ../membre/accueil_membre.php');
					} else if ($password == $data['password'] AND $data['etat'] == 'admin') {
						$_SESSION['admin'] = $data['prenom'];
						$_SESSION['id'] = $data['id'];
						header('Location: ../admin/accueil_admin.php');
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
	
	<?php
		if(isset($errMsg)){
			echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
		}
	?>
	<form action="" method="post">
		<h2 class="text-center">Connexion</h2>       
		<div class="form-group">
			<input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
		</div>
		<div class="form-group">
			<input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
		</div>
		<div class="form-group">
			<button type="submit" name="login" class="btn btn-primary btn-block">Connexion</button>
		</div>   
	</form>
	<p class="text-center"><a href="inscription.php">Inscription</a></p>
</div>
<style>
	.login-form {
		width: 340px;
		margin: 50px auto;
	}
	.login-form form {
		margin-bottom: 15px;
		background: #f7f7f7;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		padding: 30px;
	}
	.login-form h2 {
		margin: 0 0 15px;
	}
	.form-control, .btn {
		min-height: 38px;
		border-radius: 2px;
	}
	.btn {        
		font-size: 15px;
		font-weight: bold;
	}
</style>
</body>
</html>