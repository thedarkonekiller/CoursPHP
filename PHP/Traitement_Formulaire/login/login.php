<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./traitement.php" method="post">
        <input type="email" name="mail" placeholder="Votre Email">
        <input type="password" name="motDePasse" placeholder="Votre mot de passe">
        <button type="submit">Connexion</button>
    </form>

    <form action="./traitement.php" method="get">
        <input type="hidden" name="id">
        <label for="ref">Référence</label>
        <input type="text" name="reference" id="ref">
        <label for="artname">Nom de l'article</label>
        <input type="text" name="articleName" id="artname">
        <label for="artdes">Désignation de l'article</label>
        <textarea name="articleDesignation" id="artdes" cols="30" rows="10"></textarea>
        <label for="artquant">Quantité en stock</label>
        <input type="number" name="articleQuantity" id="artquant">
        <label for="artprice">Prix</label>
        <input type="number" name="articlePrice" id="artpice">
        <input type="submit" value="Enregistrer">
    </form>

</body>

</html>