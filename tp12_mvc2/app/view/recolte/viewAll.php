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
          <tr>
          <?php
           for ($i = 0; $i < count($results[0]); $i++) {
               echo ("<th scope = 'col'>".  $results[0][$i] . "</option>") ;
                }
            ?>
         
          </tr>
          
  
      </thead>
      <tbody>
          <?php
//           for ($i = 0; $i < count($results[1]); $i++) {
//               echo ("<tr><td>".  $results[1][$i] . "</td></tr>") ;
//                }
                
            foreach ($results[0] as $element) {
           printf("<tr><td>%s</td><td>%s</td><td>%d</td><td>%.2f</td><td>%s</td><td>%s</td><td>%d</td></tr>", $element->getRegion(), 
             $element->getCru(), $element->getAnnee(), $element->getDegre(),$element->getNom, $element->getPrennom(), $element->getQuantite());
          }
            ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  