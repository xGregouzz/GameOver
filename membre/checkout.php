
<center>
<fieldset>
<legend><U><h2>Entrez vos coordonées</h2></U></legend>
<br>
<form action="index.php?action=saveorder.php" method="POST">
   <b> Nom </b> &nbsp<input type="text" name="nom"><br>
    <br>
    <b> Mail </b> &nbsp <input type="text" name="mail"> <br>
    <br>
    <b> Adresse </b> &nbsp <input type="text" name="adresse"><br>
    <br>
    <b> Payez par </b> &nbsp <select name="mp">
        <option value="visa">VISA</option>
        <option value="mc">MASTER CARD</option>
        <option value="amex">AMEX</option>
        <option value="paypal">PAYPAL</option>
    </select><br>
    <br>
    <input type="submit" value="Commander">
    </center>
</form>
</legend>