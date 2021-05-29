<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.css" rel="stylesheet"/>
    <link href="my_css.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <form action="tp05_tournoi_action.php" method="get" style="text-align: center">
                
            <div class="container">
                    <div class="panel panel-info">
                       <div class="panel-heading">
                           <h3 class='panel-title'>
                              <b>Informations des joueurs</b>
                           </h3>
                       </div>       
                    </div>
                </div>
    
    
                <div class="container">
                           <?php
                    $nbJoueur = $_GET["nbJoueur"];
                    
                    for($i = 1; $i <= $nbJoueur; $i++){
                           echo'<b>Player<b>'.$i.'<br>'
                        . "<label for='nom'>Nom</label>"." <input type='text' class='form-control' id='nom' placeholder='Donnez votre nom' name='nom_".$i."'>"
                        . "<label for='prenom'>Prénom</label>"." <input type='text' class='form-control'placeholder='Donnez votre prénom' id='prenom' name='prenom_".$i."'>"
                        . "<label for='email'>Email</label>"." <input type='email' class='form-control'placeholder='Donnez votre email' id='email' name='email_".$i."'>"         ;                        
                    }
                    ?>
                    

              </div>
        

            <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</body>
</html>
