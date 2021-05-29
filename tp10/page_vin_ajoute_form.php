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
           echo"<form class = 'LO07' method = 'get' action='page_vin_ajoute_action'>";
           
           echo"<div class='form-group'>"
               ."<label for='cru'>Cru?</label>"
               ."<input type='text' class='form-control' id='cru' value='' name='cru'>"
               ."</div>";
           
           echo"<div class='form-group'>"
               ."<label for='annee'>Année?</label>"
               ."<input type='text' class='form-control' id='annee' value='' name='annee'>"
               ."</div>";
           
           echo"<div class='form-group'>"
               ."<label for='degre'>Degré?</label>"
               ."<input type='text' class='form-control' id='degre' value='' name='degre'>"
               ."</div>";
           
           echo "<button type='submit' class='btn btn-primary'>Submit form</button>";
           echo "</form>";
           echo "\n";
        }catch (PDOException $e) {
         printf("%s - %s<p/>\n", $e->getCode(),$e->getMessage());
        }
