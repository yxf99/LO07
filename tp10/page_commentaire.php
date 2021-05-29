<?php include 'fragmentHeader.html';?>
<body>
    <div class="container">
<?php
        include 'fragmentMenu.html';
        include 'fragmentJumbotron.html';      
        include 'fragmentDatabaseConfig.php';
        include 'bibliotheque.php';
        include 'fragmentFooter.html';
        panel_head("Mon avis");
        echo"<p> A mon avis, le fragment du php facilite le processus de chercher les sources de codes en précisant chaque segment du project."
        . " En plus, on pourrait encapsuler les éléments féquents à utiliser après dans un fragment et les ajouter dans le fichier quand on veut où on veut. Cela va "
                . "aussi rendre modifier facilement s'il y a des problèmes ont lieu dans un fragment. </p>";
         echo"<p> A propos des points négatifs, je pense que s'il y a trop de fragments, ça sera plus compliqué à compléter le projets. Et un "
        . "fragment peut-être a besoin de s'adapeter aux circonstances différentes, c'est à dire qu'il faut changer des codes par rapport aux besoins. </p>";
        

