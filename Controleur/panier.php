<?php 
    $t = 0;
    foreach ($cart['lineitems'] as $key => $item) {
        $qty = $item['qty'];
        $desc = $item['articles']['description'];
        $prix = $item['articles']['prix'];
        $prix_facture = $prix * $qty;
        echo "<tr>";
            echo "<td align='center'>$qty</td>";
            echo "<td align='center'>$desc</td>";
            echo "<td align='center'>$prix</td>";
            echo "<td align='center'>$prix_facture</td>";
        echo "</tr>";
    }
?>