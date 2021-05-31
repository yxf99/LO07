<!-- ----- début viewInserted -->
<?php
require($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>
    <!-- ===================================================== -->

    <?php
    if ($results) {
        echo("<h3>Le producteur a été enlevé :</h3>");
        echo("<ul>");
        echo("<li>id = " . $results->getId() . "</li>");
        echo("<li>nom = " . $results->getNom() . "</li>");
        echo("<li>prénom = " . $results->getPrenom() . "</li>");
        echo("<li>région = " . $results->getRegion() . "</li>");
        echo("</ul>");
    } else {
        echo "<h3>Problème de suppression du producteur </h3>" . $_GET['id'];
        echo "<p>Il est probable qu'il soit déjà présent dans la table des récoltes</p>";
    }

    echo("</div>");

    include $root . '/app/view/fragment/fragmentCaveFooter.html';
    ?>
    <!-- ----- fin viewInserted -->