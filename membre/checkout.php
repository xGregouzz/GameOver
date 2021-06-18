
<center>
<fieldset>
<legend><U><h2>Entrez vos coordonées</h2></U></legend>
<br>
<?php
    require_once('../config.php')
?>

<?php
    if (isset($_SESSION['flash']['error_mail'])) {
        echo "<div class='error_mail'>".$_SESSION['flash']['error_mail'].'</div>';
        echo "</br>";
    } else if (isset($_SESSION['flash']['error_champs'])) {
        echo "<div class='error_champs'>".$_SESSION['flash']['error_champs'].'</div>';
        echo "</br>";
    }
?>

<form action="saveorder.php?id=<?= $_SESSION['id'] ?>" method="POST">
    <b> Email </b> &nbsp <input type="text" name="email"> <br>
    <br>
    <b> Payez par </b> &nbsp <select name="type_paiement">
        <option value="VISA">VISA</option>
        <option value="MASTER CARD">MASTER CARD</option>
        <option value="AMEX">AMEX</option>
        <option value="PAYPAL">PAYPAL</option>
    </select><br>
    <br>
    <input type="submit" value="Commander">
    </center>
</form>
</legend>