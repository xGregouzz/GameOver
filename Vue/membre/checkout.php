<legend><U><h2>Entrez vos coordonées</h2></U></legend>
<br>
<form action="index.php?action=saveorder.php" method="POST">
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
</form>