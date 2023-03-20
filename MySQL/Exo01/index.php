<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <form action="./traitement.php" method="get">
        <fieldset>
            <legend>Table Clients</legend>
        <label for="cli_id">ID Client</label>
        <input type="number" name="ClientId" id="cli_id" required>
        <label for="sname">Nom Société</label>
        <input type="text" name="societyName" id="sname" required>
        <label for="saddress">Adresse</label>
        <input type="text" name="societyAddress" id="saddress" required>
        <label for="cp">Code Postal</label>
        <input type="number" name="postalCode" id="cp" required>
        <label for="country">Ville</label>
        <input type="text" name="societyCountry" id="country" required>
        <label for="phone">Téléphone</label>
        <input type="tel" name="phoneNumber" id="phone" required>
        <label for="contname">Nom du contact</label>
        <input type="text" name="contactName" id="contname" required>
        <label for="contfirstname">Prénom du contact</label>
        <input type="text" name="contactFirstName" id="contfirstname" required>
        <label for="mail">Email</label>
        <input type="email" name="societyEmail" id="mail" required>
        <input type="submit" name="button" value="Enregistrer">
        </fieldset>
        
    </form>
</body>
</html>