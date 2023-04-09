<?php require_once './database.php'; ?>

<?php
$db = new PDO('mysql:host='.$host.';dbname='.$dbName.';charset='.$charset.';',$dbUser,$dbPwd);

//var_dump($db);

if (!empty($db) && $_POST["add"]) {
    //echo "connexion réussi";
    $designation = $_POST['designation'];
    $img = $_POST['img'];
    $price = $_POST['prix'];

    $req = "INSERT INTO products (designation, img, prix) VALUES ('$designation','$img','$price')";

    $exec = $db->query($req);

    header('Location: ./admin.php');
    $db = null;

if (!empty($db) && $_POST["modify"]) {
    # code...
}
if (!empty($db) && $_POST["supprim"]) {
    # code...
}



  
} else { ?>
    <h2><?= "La connexion à la Base de données a échouée !" ?></h2>
<?php }

?>