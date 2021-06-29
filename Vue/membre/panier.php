<?php  
    include_once("Controleur/cart.php");
    $cart = findcart();
    $date_commande = date('Y-m-d H:i:s');
?>

<table cellpadding="5" cellspacing="0">
    <tr style="background-color: blue;">
        <td rowspan="2">Quantité</td>
        <td rowspan="2">Description</td>
        <td colspan="2" align="center">Prix</td>
    </tr>
    <tr style="background-color: blue;">
        <td>Each</td>
        <td>Total</td>
    </tr>
    <?php
        include_once('Controleur/panier.php');
    ?>
    <tr>
        <td colspan="3" align="right"><b>Total</b></td>
        <td align="center"><b><?php echo cartTotalPrice(); ?></b></td>
    </tr>
</table>
<br>
<a href="Vue/membre/accueil_membre.php">Continuer le shopping</a>&nbsp
<a href="index.php?action=empty.php">Vider le panier</a>&nbsp
<a href="index.php?action=checkout.php">Commander</a>
