<?php 
require_once('../config.php');
require_once('modifier_profil2.php');
        $req = $connect->query('SELECT * FROM utilisateurs WHERE id = '.$_SESSION['id']);
        $utilisateur = $req->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset=UTF-8">
    <title>Modifier</title>
    <h1>Informations personnelles</h1>
</head>
<body>
<form action="modifier_profil2.php" method="post">

    <p> E-mail : <div class="form-group"><input type="text" class="form-control" required="required" name="E-mail" value="<?php echo $utilisateur['email']; ?>" /></div></p>
    <p> Nom : <div class="form-group"><input type="text" class="form-control" required="required" name="Nom" value="<?php echo $utilisateur['nom']; ?>" /></div></p>
    <p> Prenom : <div class="form-group"><input type="text" class="form-control" required="required" name="Prenom" value="<?php echo $utilisateur['prenom']; ?>" /></div></p>
    <p> Mot de passe : <div class="form-group"><input type="password" class="form-control" required="required" name="password" value="" /></div></p>

    <br><br><br>
    <div class="form-group"><input type="submit"  name="modif" value="Modifier"></div>
</form>
</body>
</html>