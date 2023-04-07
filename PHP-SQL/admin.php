<?php require_once './fonctions.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <h1>Admin Dashboard</h1>
    </header>
    <main>
        <section class="flex flexColumn">
            <h2>Ajout de produit</h2>
            <form action="./admin_traitement.php" method="post" class="flex flexColumn">
                <input type="text" name="designation" placeholder="Designation de l'article">
                <input type="url" name="img" placeholder="Lien vers l'image">
                <input type="number" step="0.01" name="prix" placeholder="Prix de l'article">
                <input type="submit" name="add" value="Enregistrer">
            </form>
        </section>
        <section class="flex flexColumn">
            <h2>Modification de produit</h2>
            <form action="./admin_traitement.php" method="post" class="flex flexColumn">
                <?php echo affiche_select_productName(); ?>
                <input type="text" name="designation" placeholder="Designation de l'article">
                <input type="url" name="img" placeholder="Lien vers l'image">
                <input type="number" step="0.01" name="prix" placeholder="Prix de l'article">
                <input type="submit" name="modify" value="Modifier">
            </form>
        </section>
        <section class="flex flexColumn">
            <h2>Suppression de produit</h2>
            <form action="./admin_traitement.php" method="post" class="flex flexColumn">
                <?php echo affiche_select_productName(); ?>
                <input type="submit" name="supprim" value="Supprimer">
            </form>
        </section>
    </main>

</body>

</html>