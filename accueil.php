<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GameOver</title>
</head>
<style>
    .links {
        display: flex;
        justify-content: space-evenly;
        padding: 15px;
        background-color: aliceblue;
        border: 1px solid black;
    }
    #header {

    }
    .topHeader {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-left: 25px;
        margin-right: 25px;
    }
</style>
<body>
<fieldset>
<header id="header">
    <div class="topHeader">
        <div>
            <img width="150px" src="LogoGameOver.png" alt="">
        
        </div>
        <center>
            <fieldset>
                  <h1>GameOver</h1>
            </fieldset>
         </center>
        <div style="display: flex">
            <input style="margin-right: 10px;" type="text" placeholder="Rechercher 🖊">
            <a href="login.php">Connexion</a></br>    
            <a href="register.php">S'inscrire</a>
            <a href="http://localhost/phpmyadmin/index.php?route=/sql&db=gameover&table=articles&pos=0">Modifier Article</a>
    </div>
    </fieldset>
    <nav class="links" style="--items: 5;">
        <a href="#">Playstation</a>
        <a href="#">Xbox</a>
        <a href="#">Nintendo</a>
        <a href="#">Pc</a>
    </nav>
</header>

</body>
</html>