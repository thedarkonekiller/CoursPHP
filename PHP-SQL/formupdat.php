<?php
require_once './db_mysql.php'

if ($db) {
    if ($_POST) {
        
        

    }
}


?>




<form action="./scriptupdate.php" method="post">
    <input type="text" name="designation" value="">
    <input type="url" name="image" value="">
    <input type="number" name="prix" step="0.01" value="">
    <input type="number" name="id" value="">
    <input type="submit" value="Modifier">
</form>