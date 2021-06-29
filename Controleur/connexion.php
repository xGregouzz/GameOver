<?php
    require_once '../Modele/connexion.php';
    if(isset($_POST['login'])) {
        $errMsg = '';
        if($errMsg == '') {               
            if($data == false) {
                $errMsg = "Le mot de passe ou l'email est incorrect.";
            } else {
                if($password == $data['password'] AND $data['etat'] == 'client') {
                    $_SESSION['client'] = $data['prenom'];
                    $_SESSION['id'] = $data['id'];
                    $_SESSION['email'] = $data['email'];
                    header("Location: ../Vue/membre/accueil_membre.php");
                } else if ($password == $data['password'] AND $data['etat'] == 'admin') {
                    $_SESSION['admin'] = $data['prenom'];
                    $_SESSION['id'] = $data['id'];
                    header("Location: ../Vue/admin/accueil_admin.php");
                } else {
                    $errMsg = "Le mot de passe ou l'email est incorrect.";
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>Connexion</title>
</head>
<body>
    <?php
        if(isset($errMsg)){
            echo '<br>';
            echo '<br>';
            echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
        }
    ?>
    <div class="login-form">
        <form action="../Controleur/connexion.php" method="post">
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
        <p class="text-center"><a href="../index.php?action=Vue/visiteur/inscription.php">Inscription</a></p>
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