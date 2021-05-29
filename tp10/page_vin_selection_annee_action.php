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
            panel_head("select * from vin where annee = ?");
            $query2 = sprintf("select * from vin where annee = %d" ,$_GET['annee']) ;
            $statement = $database1->query($query2);
            include 'fragmentVinResultat.php';
        }catch (PDOException $e) {
         printf("%s - %s<p/>\n", $e->getCode(),$e->getMessage());
        }
        
    
