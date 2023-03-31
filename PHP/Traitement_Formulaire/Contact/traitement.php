<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php var_dump($_POST) ?>
<!-- Début phase de tests -->
<?php 
    if (!empty($_POST)) {
        header('Location: ./contact.php');
    }


$pattern = "/^[a-zA-ZÀ-ÿ]+$/";
$patternEmail = '/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/igm'


preg_match($pattern, trim($_GET["prenom"]))

if(preg_match($pattern, trim($_GET["nom"])) && strlen($_GET["nom"]) > 1 && strlen($_GET["nom"]) < 26) {
    echo $_GET["nom"] ;
} else {
    echo "Le champ nom n'est pas bien renseigné"
}

if(preg_match($pattern, trim($_GET["prenom"])) && strlen($_GET["prenom"]) > 1 && strlen($_GET["prenom"]) < 26) {
    echo $_GET["prenom"] ;
} else {
    echo "Le champ prenom n'est pas bien renseigné"
}

filter_var(trim($_GET["email"]), FILTER_VALIDATE_EMAIL));




?>
</body>
</html>

