<?php
session_start();
$_SESSION['nom_prenom'] = "YANG_Xufang";
$module = array('LO07','LO12','IF02','IF03','IT00','EV04');
$_SESSION['module'] = $module;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap.css" rel="stylesheet"/>
        <link href="my_css.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="container">
            <div class="container">
                    <div class="panel panel-success">
                       <div class="panel-heading">
                           <h3 class='panel-title'>
                              <b>tp06_e4_session</b>
                           </h3>
                       </div>       
                    </div>
                </div>
            
            <div class="container">

        <?php
        if(isset($_SESSION["nom_prenom"])){
            $message = 'nom et prénom existent et ont comme valeurs'.$_SESSION["nom_prenom"];
            echo $message;
        } else {
            $message = "nom et prénom n'existent pas comme valeurs de session";
            echo $message;
        }
        
        
        echo '<ul>';
        
        
        if(isset($_SESSION["module"])){
            foreach ($_SESSION as $name => $value) {
                if(is_array($value)){
                echo ("<li>".$name."=". implode(',', $value)."</li>");}
                else {
                    echo("<li>".$name."=". $value."</li>");
                }
            }
        } else {
            $message = "module n'existe pas comme valeurs de session";
            echo $message;
        }
        echo '</ul>';
         
        ?>
                <a href="lo07_analyse_superglobales">lo07_analyse_superglobales</a>
        </div>
        </div>
       
    </body>
</html>
