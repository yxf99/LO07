<?php
setcookie("nom", "YANG");//必须位于html标之前
setcookie("prénom", "Xufang");
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
                              <b>tp06_e3_cookie1</b>
                           </h3>
                       </div>       
                    </div>
                </div>
            
            <div class="container">

        <?php
        if(isset($_COOKIE["nom"])){
            echo"<b>Welcome".$_COOKIE["nom"]."!</b><br/>";
        } else {
            echo"<b>Welcome guest!</b><br/>";
        }
        
       
         
         echo "Q3&4: La première fois, le nom et le prénom sont undefined dans cookie, donc ils s'affichent pas. Quand on recharge le page, le cookie a tenu le nom et le prénom, donc ils s'affichent.";
        ?>
        </div>
        </div>
       
    </body>
</html>
