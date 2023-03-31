<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 

        var_dump($_GET);

        https://phpforms.fr/template.php?stagiaire=popeye&nom=didier


        // Contrôler systématiquement que des données ont été 
        // transitées par la méthode attendue par le script PHP.

        // En locurence, notre script attends des données transitées
        // par méthode GET donc on contrôle que $_GET n'est pas vide.
        // Si $_GET est vide, alors j'empêche l'affichage de la page
        // en effectuant une redirection.

        if(empty($_GET)){
            header('Location: ./backOffice.html'); 
        }
    ?>

    <header>
        <h1><?php 

                // Pour contrôler qu'un champ est vide, j'utilise la fonction empty()
                // Pour inverser la condition, j'exploite le point d'exclamation.

                // Si $_GET["h1"] est vide en s'assurant d'avoir supprimé tous les espaces.
                // inutiles + si la chaine est constituée uniquement d'espaces.

                $pattern = "/^[a-zA-ZÀ-ÿ]+$/";

                preg_match($pattern, trim($_GET["h1"]));

                if(!empty(trim($_GET["h1"])) && strlen($_GET["h1"]) > 5 && strlen($_GET["h1"]) < 15 && preg_match($pattern, trim($_GET["h1"]))){
                    // Alors afficher le contenu de $_GET["h1"] (issu du formulaire)
                    echo $_GET["h1"];
                }
                // Le cas échéant, j'affiche une donnée prédéfinie par défaut.
                else{
                    echo "Les pingouins de madagascar"; 
                }
            ?>
                </h1>
        <p>
            <?php 
                if(!empty($_GET["intro"])){
                    echo $_GET["intro"];
                }
                else{
                    echo "Lorem ipsum dolor sit amet ...";
                }
            ?>
        </p>
        <img src="
            <?php 
                if(!empty($_GET["illustration"])){
                    echo $_GET["illustration"];
                }
                else{
                    echo "https://static.cnews.fr/sites/default/files/000_Hkg5562645_0.jpg";
                }
            ?>" 
        alt="Illustration de ...">
    </header>
    <main>
        <h2><?php echo $_GET["h2"]; ?></h2>
        <p><?php echo $_GET["sous-intro"]; ?></p>
        <div>
            <article>
                <h3><?php echo $_GET["first-h3"]; ?></h3>
                <p><?php echo $_GET["parag-sous-h3-1"]; ?></p>
            </article>
            <article>
                <h3><?php echo $_GET["second-h3"]; ?></h3>
                <p><?php echo $_GET["parag-sous-h3-2"]; ?></p>

                <!-- 
                    Extension Chrome et Firefox qui permet d'auto renseigner
                    des champs afin de tester les choses rapidement.

                    FAKE FILLER
                -->

            </article>
        </div>
    </main>
</body>
</html>