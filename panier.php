<?php  
    include_once("cart.php");
    $cart = findcart();
?>

<table cellpadding="5" cellspacing="0">
    <tr style="background-color: blue;">
        <td rowspan="2">Qty</td>
        <td rowspan="2">Description</td>
        <td colspan="2" align="center">Prix</td>
    </tr>
    <tr style="background-color: blue;">
        <td>Each</td>
        <td>Total</td>
    </tr>
    <?php 
        $t = 0;
        foreach ($cart['lineitems'] as $key => $item) {
            $qty = $item['quantity'];
            $desc = $item['article']['livre'];
            $price = $item['article']['livre'];
            $total = $price * $qty;
            echo "<tr>";
                echo "<td align='center'>$qty</td>";
                echo "<td align='center'>$desc</td>";
                echo "<td align='center'>$price</td>";
                echo "<td align='center'>$total</td>";
            echo "</tr>";
        }
    ?>
    <tr>
        <td colspan="3" align="right"><b>Total</b></td>
        <td align="center"><b><?php echo cartTotalPrice(); ?></b></td>
    </tr>
</table>
<br>
<a href="index.php?action=accueil_membre.php">Continuer le shopping</a>&nbsp
<a href="index.php?action=empty.php">Vider le panier</a>&nbsp
<a href="index.php?action=checkout.php">Commander</a>