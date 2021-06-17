<?php    
    require_once("config.php");
    //$db = connectToDatabase(); 
    //$database = recupdonnee($db);
    //$stock = getAllBooks();     
    foreach($connect["articles"]as $articles) {
?>
        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td rowspan="3"><?php echo '<img src="' . $articles['id'] . '.png">'; ?></td>
                <td><h2 style="margin: 0px;padding:0px"><?php echo strtoupper($articles["nom"]) ?></h2></td>
            </tr>
            <tr>
                <td><p><?php echo $articles["description"] ?></p></td>
            </tr>
            <tr>
                <td><b><?php echo $articles["prix"] ?>€</b>&nbsp<a href="index.php?action=addtocart&id=<?php echo $articles["id"] ?>">Ajouter au panier</a></td>
            </tr>
        </table>
        <hr />        
<?php
    }
?>
