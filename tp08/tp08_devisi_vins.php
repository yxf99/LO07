
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo ($titre) ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap.css" rel="stylesheet"/>
        <link href="my_css.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
     <?php
$dsn = 'mysql:dbname=yangxufa;host=localhost;charset=utf8';
$username = 'yangxufa';
$password = 'z7WQ2Eo1';
//$options = array(PDO::ATTR_ERRMODE => pdo::ERRMODE_WARNING);

//try {
    
//$database ->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);}
// catch (PDOException $e){
//    printf("%s - %s<p/>\n", $e->getCode(),$e->getMessage());
// }
  try{
//Q2   
    $database = new PDO($dsn, $username, $password);
    panel_head('Connexion à ma base sur dev-isi');
    echo "<div class='container'>";
    echo '<li>dsn = '.$dsn.'</li>';
    echo '<li>username = '.$username.'</li>';
    echo '<li>password = '.$password.'</li>';
    echo'</div>';
    
    // Q3 Insertion nouveau vin 
    $requete = "insert into vin values (3001, 'Champagne de Troyes', 1976, 11.45)";
    $stmt = $database->prepare($requete);
    $stmt ->execute();
    $nbretuple = $stmt->rowCount();
    panel_head("insert into vin values (3001, 'Champagne de Troyes', 1976, 11.45)");
    echo "<div class='container'>";
    echo 'Nombre de tuples ajoutées = '.$nbretuple;   
    echo'</div>';
    
    //Q4
    $requete1 = "select * from vin where annee = 1976";
    $resultats = $database ->query($requete1);
    panel_head("Requête SQL: select * from vin where annee = 1976");
    echo "<div class='container'>";
    echo "<ol>";
    while ($row = $resultats ->fetch(PDO::FETCH_ASSOC)){
        echo("<li>vin (". implode(", ", $row).")</li>");    
    }   
    echo "</ol>";
    echo'</div>';
    
    //Q5
    $stmt1= $database->prepare($requete1);
    $stmt1 -> execute();
    panel_head("Résultats dans un tableau Bootstrap avec select * from vin where annee = 1976");
    echo "<div class='container'>"; 
    echo("<table class='table table-bordered'>");
    echo '<tbody> ';
    while ($row =$stmt1 ->fetch(PDO::FETCH_ASSOC)) { 
            printf(
                    "<tr class='success'>"
                    ."<td>%s</td>"
                    ."<td>%s</td>"
                    ."<td>%s</td>"
                    ."</tr>"                   
                    , $row['id'], $row['cru'], $row['annee'], $row['degre']);                  
            
    }   
    echo"</tbody>";
    echo("</table>");      
    echo'</div>';

    //Q6
    $requete2="select id, cru from vin where annee = 1976";
    $resultats2 = $database->query($requete2); 
    panel_head("Résultats des noms des attributs avec select id,cru from vin where annee = 1976");
    echo "<div class='container'>";      
    echo ("<table class = 'table table-bordered'>");
    echo ("<tr class = 'danger'>" );
    for($j=0;$j < $resultats2 ->columnCount(); $j++){                           
             echo "<th>".$resultats2->getColumnMeta($j)['name']."</th>";            
                        }
    echo "</tr>";      
    echo '<tbody> ';    
    while ($row =$resultats2 ->fetch(PDO::FETCH_ASSOC) ){
        echo"<tr class = 'success'>";
        for($i=0;$i < $resultats2 ->columnCount(); $i++){                 
          echo "<td>" .$row[$resultats2->getColumnMeta($i)['name']] . "</td>";           
 }
     echo"</tr>" ;
        }
  
    echo"</tbody>";   
    echo("</table>");     
    echo'</div>';
    
    //Q7
    $requete3 = "select cru, annee from vin where annee = ?";
    $stmt3= $database->prepare($requete3);
    $stmt3 -> execute([1980]);
    panel_head("Résultats paramétrée par position avec annee = 1980");
    echo "<div class='container'>";      
    echo ("<table class = 'table table-bordered'>");
    echo ("<tr class = 'danger'>" );
    for($j=0;$j < $stmt3 ->columnCount(); $j++){                           
             echo "<th>".$stmt3 ->getColumnMeta($j)['name']."</th>";            
                        }
    echo "</tr>";      
    echo '<tbody> ';    
    while ($row =$stmt3 ->fetch(PDO::FETCH_ASSOC) ){
        echo"<tr class = 'success'>";
        foreach ($row as $cle => $valeur){
            echo '<td>'.$valeur.'</td>';
        } 
        echo"</tr>" ;          
     }
    echo"</tbody>";   
    echo("</table>");     
    echo'</div>';
    
    //Q8
    $requete4 = "select * from vin where annee = :an and degre = :dg";
    $stmt4= $database->prepare($requete4);
    $stmt4 -> execute([
        'an'=>1980,
        'dg'=>10.00
        ]);
    panel_head("paramètres nomées");
    echo "<div class='container'>";      
    echo ("<table class = 'table table-bordered'>");
    echo ("<tr class = 'danger'>" );
    for($j=0;$j < $stmt4 ->columnCount(); $j++){                           
             echo "<th>".$stmt4 ->getColumnMeta($j)['name']."</th>";            
                        }
    echo "</tr>";      
    echo '<tbody> ';    
    while ($row =$stmt4 ->fetch(PDO::FETCH_ASSOC) ){
        echo"<tr class = 'success'>";
        foreach ($row as $cle => $valeur){
            echo '<td>'.$valeur.'</td>';
        } 
        echo"</tr>" ;          
     }
    echo"</tbody>";   
    echo("</table>");     
    echo'</div>';
    
    
    
    
} catch (PDOException $e) {
    printf("%s - %s<p/>\n", $e->getCode(),$e->getMessage());
}

try{
    //Q9
    panel_head("Gestion des erreurs");
    $database ->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
    $requete5 = "select * from vinXYZ";
    $stmt5 = $database ->query($requete5);
} catch (PDOException $ex){
    echo "<div class='container'>";
    printf("%s - %s<p/>\n", $ex->getCode(),$ex->getMessage());
    echo"</div>";
}

try{
    //Q10
    panel_head("Gestion des transations");
    $database ->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
    $database->beginTransaction();
    $requete6 = "insert into vin values(2000,'Champagne de Troyes',2019,11.45)";
    $database->exec($requete6);
    $database->exec($requete6);
    $database->commit();
} catch (PDOException $ex){
    $database->rollBack();
    echo "<div class='container'>";
    echo("Erreur !".$ex->getMessage());
    print("<br><br>Fin");
    echo"</div>";
}

function panel_head($title){
    echo"<div class='container'>
                    <div class='panel panel-primary'>
                       <div class='panel-heading'>
                           <h3 class='panel-title'>
                              <b>".$title."</b>
                           </h3>
                       </div>       
                    </div>
                </div>";
}
?>   
    </body>



