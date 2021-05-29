<head>
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
                              <b>tp06_hidden_page2</b>
                           </h3>
                       </div>       
                    </div>
                </div>
    
    <?php

         $lien = 'lo07_analyse_superglobales.php?';
            foreach ($_GET as $key => $value) {
            $lien .= $key . '=' . $value . '&';
        }
        echo("<a href='$lien'>$lien</a>") ;
    ?>
    </div>
</body>   