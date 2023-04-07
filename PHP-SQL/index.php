<?php require_once './articles.php' ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Amazoone pour mes stagiaires de Soissons</title>
    <meta name="description" content="TP Amazoone pour mes stagiaires de Soissons">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <p class="logo">Amazoone</p>
            <ul>
                <li><a href="#">Flash</a></li>
                <li><a href="#">Basics</a></li>
                <li><a href="#">Cart. cadeaux</a></li>
                <li><a href="#">Coupons</a></li>
                <li><a href="#">Nouveau</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Beauté</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Ventes flash et promotions</h1>
        <div class="container">
            <!-- 
                Modèle de carte HTML à afficher pour chaque article issu de la BDD
                en prenant soin de mettre à jour : 
                - l'illustration, 
                - la description de l'image (alt)
                - le prix
                - le nom du produit
                Bon courage ! :)
            -->
            <?php 
            foreach ($resultats as $row) { ?>
                

            <div class="card">
                <img src="<?= $row['img']; ?>" alt="illustration de <?= $row['designation']; ?>">
                <p class="info"><?= $row['prix']; ?>€&nbsp;-&nbsp;Vente flash</p>
                <p class="product"><?= $row['designation']; ?></p>
            </div>

            <?php } ?>
            <!-- Fin du modèle de carte -->
        </div>
    </main>
    <footer>
        <p>Yohann MOY - TP Amazoone pour mes stagiaires de Soissons</p>
    </footer>
</body>
</html>