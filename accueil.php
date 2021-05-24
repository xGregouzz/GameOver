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
    <!-- <nav class="links" style="--items: 5;">
        <a href="#">Playstation</a>
        <a href="#">Xbox</a>
        <a href="#">Nintendo</a>
        <a href="#">Pc</a>
    </nav> -->
    <link href="categories.css" rel="stylesheet">
    <nav class="menu">
		<section class="categorie">
			<h3>Playstation</h3>
			<ul>
				<li><a href="#">Tagliatelle</a></li>
				<li><a href="#">Fettuccine</a></li>
				<li><a href="#">Lasagne</a></li>
			</ul>
		</section>
		<section class="categorie">
			<h3>Xbox</h3>
			<ul>
				<li><a href="#">Spaghetti</a></li>
				<li><a href="#">Spaghettoni</a></li>
				<li><a href="#">Vermicelli</a></li>
				<li><a href="#">Capellini</a></li>
			</ul>
		</section>
		<section class="categorie">
			<h3>Nintendo</h3>
			<ul>
				<li><a href="#">Macaroni</a></li>
				<li><a href="#">Cannelloni</a></li>
				<li><a href="#">Penne</a></li>
				<li><a href="#">Cavattapi</a></li>
			</ul>
		</section>
		<section class="categorie">
			<h3>PC</h3>
			<ul>
				<li><a href="#">Farfalle</a></li>
				<li><a href="#">Fusilli</a></li>
				<li><a href="#">Ravioli</a></li>
				<li><a href="#">Gnocchi</a></li>
				<li><a href="#">Conchigliette</a></li>
			</ul>
		</section>
	</nav>
    
</header>

</body>
</html>