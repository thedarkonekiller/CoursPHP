<?php require_once './database.php' ?>

<?php
$db = new PDO('mysql:host='.$host.';dbname='.$dbName.';charset='.$charset.';',$dbUser,$dbPwd);
?>