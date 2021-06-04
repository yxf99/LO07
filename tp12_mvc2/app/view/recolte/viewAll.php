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
        <tr>
          <th scope = "col">id</th>
          <th scope = "col">id</th>
          <th scope = "col">region</th>
          <th scope = "col">cru</th>
          <th scope = "col">nom</th>
          <th scope = "col">prenom</th>
          <th scope = "col">quantite</th>
        </tr>
          <tr>
  
      </thead>
      <tbody>
          <?php
           for ($i = 0; $i < count($results[0]); $i++) {
               echo ("<tr><td>".  $results[0][$i]["id"] . "</td>".
                       "<td>".  $results[0][$i]["idd"] ."</td>".
                       "<td>".  $results[0][$i]["cru"] ."</td>".
                       "<td>".  $results[0][$i]["region"]."</td>".
                       "<td>".  $results[0][$i]["nom"] ."</td>".
                       "<td>".  $results[0][$i]["prenom"] ."</td>".
                       "<td>".  $results[0][$i]["quantite"] ."</td>"."</tr>") ;
                }
                

            ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  