<?php require_once './database.php' ?>

<?php
$db = new PDO('mysql:host='.$host.';dbname='.$dbName.';charset='.$charset.';',$dbUser,$dbPwd);

//var_dump($db);

if (!empty($db)) {

    //echo "connexion réussi";

    $dbArticles = "SELECT * FROM amazoone2.products";
    //var_dump($dbArticles);
    $req = $db->query($dbArticles);

    //var_dump($exec);
    $req->execute();
    $resultats = $req->fetchAll(PDO::FETCH_ASSOC);
    $db = null;
} else { ?>
    <h2><?= "La connexion à la Base de données a échouée !" ?></h2>
<?php }

?>