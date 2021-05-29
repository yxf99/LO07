<?php include 'fragmentHeader.html';?>
<body>
    <div class="container">
<?php
        include 'fragmentMenu.html';
        include 'fragmentJumbotron.html';
        include 'fragmentFooter.html';
        include 'fragmentDatabaseConfig.php';
        include 'bibliotheque.php';
         try{
            
        panel_head("Liste des vins (SELECT * from vin order by cru)");
        $query = "select * from vin order by cru";
        $statement = $database1->query($query);
        include 'fragmentVinResultat.php';
       
        
            panel_head("Liste des vins (SELECT * from vin order by id)");
            $req1 = "SELECT * from vin order by id";
            $res1 = $database1->query($req1);
    echo "<div class='container'>";      
    echo ("<table class = 'table table-bordered table-striped'>");
    echo ("<tr>" );
    for($j=0;$j < $res1 ->columnCount(); $j++){                           
             echo "<th>".$res1->getColumnMeta($j)['name']."</th>";}
         echo "</tr>";      
    echo '<tbody> ';    
    while ($row =$res1 ->fetch(PDO::FETCH_ASSOC) ){
        echo"<tr class = 'table table-bordered'>";
        for($i=0;$i < $res1 ->columnCount(); $i++){                 
        echo "<td>" .$row[$res1->getColumnMeta($i)['name']] . "</td>";}
        echo"</tr>" ;}  
        }catch (PDOException $e) {
    printf("%s - %s<p/>\n", $e->getCode(),$e->getMessage());
        }
        
        
  
        ?>
             