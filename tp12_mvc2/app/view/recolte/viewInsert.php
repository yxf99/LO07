
<!-- ----- début viewInsert -->
 
<?php 
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?> 

    <form role="form" method='get' action='router2.php'>
      <div class="form-group">       
        <input type="hidden" name='action' value='recolteCreated'> 
        <label for="vin_id">Sélection d'un vin : </label> 
        <select class="form-control" id='vin_id' name='vin_id' style="width: 200px">
            <?php
                   
            for ($i = 0; $i < count($results1[0]); $i++) {
               echo ("<option value=" .  $results1[0][$i]['id'] . ">".  $results1[0][$i]['id'] .":". $results1[0][$i]['cru'] .":". $results1[0][$i]['annee'] . "</option>") ;
                }
            ?>
        </select>
         
        <label for="producteur_id">Sélection d'un producteur : </label> 
        <select class="form-control" id='"producteur_id' name='producteur_id' style="width: 200px">
            <?php
             for ($i = 0; $i < count($results1[1]); $i++) {
               echo ("<option value=" .  $results1[1][$i]['id'] . ">".  $results1[1][$i]['id'] .":". $results1[1][$i]['nom'] .":". $results1[1][$i]['prenom'] .":". $results1[1][$i]['region'] . "</option>") ;
                }
            ?>
        </select>
        
        <label for="id">quantite : </label><input type="number" step='any' name='quantite' value=''>                
      </div>
      <p/>
      <button class="btn btn-primary" type="submit">Go</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewInsert -->



