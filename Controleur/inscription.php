<?php
    // Calcul majorité (age)
    $date_naissance = $_POST['date_naissance'];
    $birth = date_create($_POST["date_naissance"]);
    $birthFormat = date_format($birth, "Y-m-d");
    $age = date('Y') - date_format($birth, "Y");;
    if (date('md') < date('md', strtotime($birthFormat))) {
            $age -= 1;
    }

    //On vérifie que tous les champs sont bien remplis.
    if (!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["date_naissance"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
        //On respecte les conventions de codage.
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) && strlen($_POST["email"]) <= 45 ) {
            if (strlen($_POST["password"]) <= 30) {
                if (strlen($_POST["nom"]) <= 45) {
                    if (strlen($_POST["prenom"]) <= 45) {
                        if($age > 18) {
                            if (ctype_alpha($_POST["nom"])) {
                                if (ctype_alpha($_POST["prenom"])) {
                                    include_once ("../Modele/inscription.php");
                                    $pdo = connectToDatabase("localhost", "root", "", "gameover");
                                    //On vérifie qu'il n'y aura pas de doublons pour pseudo/phone/mail.
                                    $existeMail = verifEmail($pdo);
                                    if ($existeMail == true ){
                                        //Pas de doublons, on ajoute nos informations à la base de donnée.
                                        $hashPass = md5($_POST["password"]);
                                        insertUser($pdo, $hashPass);
                                        //Inscription terminé, renvoie vers la page confirmation d'inscription.
                                        echo "<center>Inscription réussie ! <a href='../index.php?action=Vue/visiteur/connexion.php'>Connexion</a></center>";
                                    }else{
                                        $MailExist = "Cette adresse mail existe déjà. Vous avez peut-être déjà un compte ! <a href='../index.php?action=Vue/visiteur/connexion.php'>Connexion</a>";
                                    }
                                }else{
                                    $PrenomError = "Un Prénom ne doit contenir que des lettres !";
                                }
                            }else{
                                $NomError = "Un Nom ne doit contenir que des lettres !";
                            }
                        }else{
                            $DateError = "Il faut être majeur pour créer un compte GameOver";
                        }
                    }else{
                        $PrenomErrorNb = "Votre Prénom est trop long !";
                    }
                }else{
                    $NomErrorNb = "Votre Nom est trop longue !";
                }
            }else{
                $passwordErrorNb = "sdfghjkVotre Mot de passe est trop long !";
            }
        }else{
            $MailError = "Veillez à entrer un e-mail valide !";
        }
    }else{
        //Tous les champs ne sont pas remplis.
        $donnee = $_POST;			
        foreach ($donnee as $key => $value) {
            if (empty($value==true)) {
                echo "<span style=color:#000000;text-align:center;>Le champ ".$key. " est vide, veuillez réessayer !"."<br/></span>";	
            }				
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulaire D'Inscription</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <?php if (isset($NomError)) { echo "<center><span style=color:#000000;text-align:center;>$NomError</span></center>"; } ?>
    <?php if (isset($PrenomError)) { echo "<span style=color:#000000;text-align:center;>$PrenomError</span>"; } ?>
    <?php if (isset($MailError)) { echo "<span style=color:#000000;text-align:center;>$MailError</span>"; } ?>    
    <?php if (isset($MailExist)) { echo "<center><span style=color:#000000;text-align:center;>$MailExist</span></center>"; } ?>
    <?php if (isset($passwordError)) { echo "<span style=color:#000000;text-align:center;>$passwordError</span>"; } ?>
    <?php if (isset($DateError)) { echo "<span style=color:#000000;text-align:center;>$DateError</span>"; } ?>
    <?php if (isset($MailErrorNb)) { echo "<span style=color:#000000;text-align:center;>$MailErrorNb</span>"; } ?>
    <?php if (isset($PrenomErrorNb)) { echo "<span style=color:#000000;text-align:center;>$PrenomErrorNb</span>"; } ?>
    <?php if (isset($NomErrorNb)) { echo "<span style=color:#000000;text-align:center;>$NomErrorNb</span>"; } ?>
    <?php if (isset($passwordErrorNb)) { echo "<span style=color:#000000;text-align:center;>$passwordErrorNb</span>"; } ?>

    <div class="login-form">
        <form action="../Controleur/inscription.php" method="post">
            <h2 class="text-center">Inscription</h2>       
            <div class="form-group">
                <input type="text" name="prenom" class="form-control" value="<?php echo $_POST["prenom"]; ?>" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="text" name="nom" class="form-control" value="<?php echo $_POST["nom"]; ?>" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="date" name="date_naissance" class="form-control" value="<?php echo $_POST["date_naissance"]; ?>" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" value="<?php echo $_POST["email"]; ?>" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" value="<?php echo $_POST["password"]; ?>" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Inscription</button>
            </div>   
        </form>
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