<!-- ----- début viewAll -->
<?php

require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
      ?>

    <table class = "table table-striped table-bordered">
      <thead>
<!--        <tr>
          <th scope = "col">producteur_id</th>
          <th scope = "col">vin_id</th>
          <th scope = "col">quantite</th>
        </tr>-->
          <?php
          $cols = $results[0];
          $datas = $results[1];
         echo"helllllp";
          echo '<tr>'; 
          echo "<th scope = 'col'>";
          printf($cols) ;
          echo '</th>';       
          echo '</tr>'; 
          ?>
      </thead>
      <tbody>
          <?php
          // La liste des vins est dans une variable $results             
         
           echo"<td>";
           printf($datas);
           echo"</td>";
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  