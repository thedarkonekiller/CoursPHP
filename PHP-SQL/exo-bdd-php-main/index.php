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
    <?php 
        $conn = new PDO(
            'mysql:host=localhost;dbname=amazoone;charset=utf8','root',''    
        );

        if(!empty($conn)):
            /* echo "Connexion BDD réussie"; */
    ?>
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
                $exec = $conn->query("SELECT * FROM products");
                if($exec != false):

                $res = $exec->fetchAll(PDO::FETCH_ASSOC);

                foreach($res as $tuple):
            ?>
                <div class="card">
                
                    <form action="./scriptDelete.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $tuple["id"]; ?>">
                        <button type="submit">X</button>
                    </form>

                    <img 
                        src="<?= $tuple["img"]; ?>" 
                        alt="illustration de <?= $tuple["designation"]; ?>"
                    >
                    <p class="info"><?= $tuple["prix"]; ?> €&nbsp;-&nbsp;Vente flash</p>
                    <p class="product"><?= $tuple["designation"]; ?></p>
                </div>
                <!-- Fin du modèle de carte -->
            <?php endforeach; ?>

            <?php else: ?>
                <p>Requete SQL non valide.</p>
            <?php endif;?>









            
            
        </div>
    </main>
    <footer>
        <p>Yohann MOY - TP Amazoone pour mes stagiaires de Soissons</p>
    </footer>


    <?php endif; ?>
</body>
</html>