<?php
Session_start();
Session_destroy();
header("location: ../visiteur/accueil.php");
?>