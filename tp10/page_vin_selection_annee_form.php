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
            panel_head("Formulaire de sélection une année");
            $query1 = "select distinct annee from vin order by annee";
            $statement1 = $database1->query($query1);
            
            echo"<form class = 'LO07' method = 'GET' action='page_vin_selection_annee_action'>";
            
            echo "<p>anneé:</p>";
            echo"<div class='form-group'>";
            echo"<select multiple class='form-control' name='annee'>";  
            echo"<optgroup>";
            while ($tuple1 = $statement1 -> fetch()){
            printf("<option name='annee'>%d</option>\n",
                    $tuple1['annee']);}
                    echo"</optgroup>";
                    echo"</div>";
                           
                echo"</select>";
                echo "<button type='submit' class='btn btn-primary'>Submit form</button>";
                
                echo "</form>";
                echo "\n";
        }catch (PDOException $e) {
         printf("%s - %s<p/>\n", $e->getCode(),$e->getMessage());
        }