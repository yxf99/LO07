<?php
    require ('lo07_biblio_formulaire_bt.php');
    ?>

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
                              <b>tp06_hidden_page1</b>
                           </h3>
                       </div>       
                    </div>
                </div>
    
    <?php
    form_begin("lo07", "get", "tp06_e2_hidden_page2");
    form_input_text( "hidden", "ville", "Troyes");
    form_input_text( "hidden", "effectif", "3000");
    form_input_submit("UTT");    
    form_end();
    form_begin("lo07", "get", "tp06_e2_hidden_page2");
    form_input_text( "hidden", "ville", "Compiègne");
    form_input_text( "hidden", "effectif", "3200");
    form_input_submit("UTC");    
    form_end();
    form_begin("lo07", "get", "tp06_e2_hidden_page2");
    form_input_text( "hidden", "ville", "Belfort");
    form_input_text( "hidden", "effectif", "3100");
    form_input_submit("UTBM");    
    form_end();
    ?>
    </div>
</body>   