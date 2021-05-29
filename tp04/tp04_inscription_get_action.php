
 <html>
     <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="my_css.css" rel="stylesheet" type="text/css" />
     </head>
     <body>
         <div class="container">
             <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class='panel-title'>
                       <b>Traitement en PHP d'un formulaire (méthode GET)</b>
                    </h3>
                </div>                   
                <div class="panel-body" >
                   <?php                        
                         echo " Liste des paramètres reçus "
                    ?>
                </div> 
            </div>
         </div>
         
         <div class="container">
             <table class='table table-bordered table-striped'>
                 <thead>
                    <tr>
                        <th>name</th>
                        <th>valeur(s)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>nom</td>
                        <td><?php echo $_GET ["nom"]; ?></td>
                    </tr>
                    <tr>
                        <td>prenom</td>
                        <td><?php echo $_GET ["prenom"]; ?></td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td><?php echo $_GET ["email"]; ?></td>
                    </tr>
                    <tr>
                        <td>date_naissance</td>
                        <td><?php echo $_GET ["ddn"]; ?></td>
                    </tr>
                    <tr>
                        <td>sexe</td>
                        <td><?php echo $_GET ["sex"]; ?></td>
                    </tr>
                    <tr>
                        <td>origine</td>
                        <td><?php echo $_GET ["origine"]; ?></td>
                    </tr>
                    <tr>
                        <td>ST07</td>
                         <td><?php echo $_GET ["ST07"]; ?></td>
                    </tr>
                    <tr>
                        <td>ST09</td>
                        <td>
                            <?php echo $_GET ["ST09"]; ?>  
                        </td>
                    </tr>
                    <tr>
                        <td>ST10</td>
                        <td><?php echo $_GET ["ST10"]; ?></td>
                    </tr>
                    <tr>
                        <td>SE</td>
                        <td><?php echo $_GET['SE']; ?></td>
                    </tr>
                    <tr>
                        <td>modules</td>
                        <td><?php
                            foreach ($_GET['modules'] as $element) {
                                echo("$element"." ");
                               
                            }

                        ?></td>
                    </tr>
                    <tr>
                        <td>textarea</td>
                        <td><?php echo $_GET ["textarea"]; ?></td>
                    </tr>
                </tbody>
             </table>
         </div>
         
         <div class="container">
             <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class='panel-title'>
                       <b>Mes réponses aux questions...</b>
                    </h3>
                </div>                   
                <div class="panel-body" >
                   <?php                        
                         echo " Liste des questions de la section 2.7 "
                    ?>
                </div> 
            </div>
         </div>
         
         <div class="container">
             <table class='table table-bordered table-striped'>
                 <thead>
                    <tr>
                        <th>Questions</th>
                        <th>Réponses</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Question 7.1</td>
                        <td>
                            <?php echo "Il affichra rien."; ?>  
                        </td>
                    </tr>
                    <tr>
                        <td>Question 7.2</td>
                        <td>
                            <?php echo "pour récupérer plusieurs valeurs pour le même name, j'ai gardé un seul name et j'ai ajouté un élément hidden avant"; ?>  
                        </td>
                    </tr>
                    <tr>
                        <td>Question 7.3</td>
                        <td >
                            <?php echo "on utilise un élément avec le type'submit', et on ajoute action='(le document qui recoit les valeurs)' dans 'form'"; ?>  
                        </td>
                    </tr>
                    <tr>
                        <td>Question 7.4</td>
                        <td>
                            <?php echo "ex: en changeant le nom dans le navigateur, le valeur envoyé à mon script PHP a changé"; ?>  
                        </td>
                    </tr>
                    <tr>
                        <td>Question 7.5</td>
                        <td>
                            <?php echo "il y aura un erreur: Notice: Undefined index"; ?>  
                        </td>
                </tbody>
         </div>
     </body>
 </html>
