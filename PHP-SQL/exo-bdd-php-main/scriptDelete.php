<?php 

    // Connecter à la BDD

    $conn = new PDO(
        'mysql:host=localhost;dbname=amazoone;charset=utf8','root',''    
    );

    
    // Verifier que la connexion est bien effectuée
    // Si c'est le cas : 
    if(!empty($conn)){

        // Récupérer l'id issu du formulaire de suppression.
        $id = $_POST["id"];

        // Déclare la requête de suppression
        $req = "DELETE FROM products WHERE id=$id";

        $exec = $conn->query($req);

        if($exec != false){
            echo "Suppression effectuée";
        }
        else{
            echo "Requête invalide";
        }
    }
    // Le cas contraire : 
    else{
        // Afficher une erreur.
    }

?>