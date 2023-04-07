<?php

 function affiche_select_productName()
 {
    require_once './database.php';
     $sql="select designation from products";
     $db = new PDO('mysql:host='.$host.';dbname='.$dbName.';charset='.$charset.';',$dbUser,$dbPwd);
     if (!empty($db)) { 
        $selected = "<select name=\"productList\"> \n";
                            $reponse = $db->query($sql);
                              while ($donnees = $reponse->fetch())
                                    {
                                    $selected .= "<option value=\"".$donnees['designation']. "\">" .$donnees['designation']."</option>\n";
   
                                    }
   
                                    $selected .= "</select>\n";
   
                                    return $selected;
               
     }else {
        echo "ca marche pas";
     }
     }



 ?>