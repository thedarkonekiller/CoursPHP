<?php
//Identifiants Database
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'Exo01';
// Données du formulaire
$cli_id=$_POST['ClientId']??'';
$societyName=$_POST['societyName']??'';
$adress=$_POST['societyAddress']??'';
$cp=$_POST['postalCode']??'';
$country=$_POST['societyCountry']??'';
$phone=$_POST['phoneNumber']??'';
$contNom=$_POST['contactName']??'';
$contPnom=$_POST['contactFirstName']??'';
$email=$_POST['societyEmail']??'';

try{
    // Connexion à MySQL
    $dbco=new PDO("mysql:host=$hostname;dbname=$database",$username,$password);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête d'insertion
    $addSociety = $dbco->prepare("INSERT INTO clients (Cli_ID, Société, Adresse, CP, Ville, Telephone, ContNom, ContPnom, Mail) VALUES (:cli_id, :societyName, :adress, :cp, :country, :phone, :contNom, :contPnom, :email)");
    $addSociety->bindParam(':cli_id',$cli_id);
    $addSociety->bindParam(':societyName',$societyName);
    $addSociety->bindParam(':adress',$adress);
    $addSociety->bindParam(':cp',$cp);
    $addSociety->bindParam(':country',$country);
    $addSociety->bindParam(':phone',$phone);
    $addSociety->bindParam(':contName',$contName);
    $addSociety->bindParam(':contFirstName',$contFirstName);
    $addSociety->bindParam(':email',$email);
   // Exécution de la reqête
   $addSociety->execute(compact('cli_id','societyName','adress','cp','country','phone','contNom','contFirstName','email'));
   //On renvoie l'utilisateur vers la page de remerciement
   header("Location:thanks.html");

    }
    catch(PDOException $e) {
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }

?>