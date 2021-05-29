<?php include 'fragmentHeader.html';?>
<body>
    <div class="container">
<?php
        include 'fragmentMenu.html';
        include 'fragmentJumbotron.html';      
        include 'fragmentDatabaseConfig.php';
        include 'bibliotheque.php';
        include 'fragmentFooter.html';
        try{ 
            panel_head("Ajoute d'un vin(form)");
            $query4 = "select max(id) from vin";
            $statement3 = $database1->query($query4);
            $id = $statement3 -> fetch(PDO::FETCH_NUM)[0] + 1;
            
            $query3 = sprintf("insert into vin VALUE(%d, '%s', %d, %.2f )",$id,$_GET['cru'],$_GET['annee'],$_GET['degre']);                    
            $statement2=$database1->exec($query3);
            $database1->commit();
            
        }catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(),$e->getMessage());
            echo" ajouté avec success ";
        }

