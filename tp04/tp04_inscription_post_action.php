
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
                        <td><?php echo $_POST ["nom"]; ?></td>
                    </tr>
                    <tr>
                        <td>prenom</td>
                        <td><?php echo $_POST ["prenom"]; ?></td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td><?php echo $_POST ["email"]; ?></td>
                    </tr>
                    <tr>
                        <td>date_naissance</td>
                        <td><?php echo $_POST ["ddn"]; ?></td>
                    </tr>
                    <tr>
                        <td>sexe</td>
                        <td><?php echo $_POST ["sex"]; ?></td>
                    </tr>
                    <tr>
                        <td>origine</td>
                        <td><?php echo $_POST ["origine"]; ?></td>
                    </tr>
                    <tr>
                        <td>ST07</td>
                         <td><?php echo $_POST ["ST07"]; ?></td>
                    </tr>
                    <tr>
                        <td>ST09</td>
                        <td>
                            <?php echo $_POST ["ST09"]; ?>  
                        </td>
                    </tr>
                    <tr>
                        <td>ST10</td>
                        <td><?php echo $_POST ["ST10"]; ?></td>
                    </tr>
                    <tr>
                        <td>SE</td>
                        <td><?php echo $_POST ["SE"]; ?></td>
                    </tr>
                    <tr>
                        <td>modules</td>
                        <td><?php
                            foreach ($_POST["modules"] as $element) {
                                echo("$element"." ");
                               
                            }
                        ?></td>
                    </tr>
                    <tr>
                        <td>textarea</td>
                        <td><?php echo $_POST ["textarea"]; ?></td>
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
                         echo " Liste des questions de la section 3.5 "
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
                        <td>Question 5.1</td>
                        <td>
                            <?php echo "Pour faire transiter des données de page en page
                                ,deux méthodes d'envoie passe par une requête HTTP"; ?>  
                        </td>
                    </tr>
                    <tr>
                        <td>Question 5.2</td>
                        <td>
                            <?php echo "1.Nombre important de couples clé / valeur <br>
                                        2.Transfert de fichiers entre un client et un serveur<br>
                                         3. Envoie de données confidentielles (mot de passe)(les données sont incluses dans le formulaire donc invisibles : à réserver pour des données sensibles)"; ?>  
                        </td>
                    </tr>
                </tbody>
         </div>
     </body>
 </html>
