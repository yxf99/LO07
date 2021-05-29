<html>
     <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="my_css.css" rel="stylesheet" type="text/css" />
     </head>
     <body>
         <?php
         $form_element=array(
             "nom"=>$_REQUEST ["nom"],
             "prenom"=>$_REQUEST ["prenom"],
             "email"=>$_REQUEST ["email"],
             "ddn"=>$_REQUEST ["ddn"],
             "sex"=>$_REQUEST ["sex"], 
             "origine"=>$_REQUEST ["origine"], 
             "ST07"=>$_REQUEST ["ST07"],
             "ST09"=>$_REQUEST ["ST09"],
             "ST10"=>$_REQUEST ["ST10"],
             "SE"=>$_REQUEST['SE'],)
         ?>
        <?php 
           if ($_SERVER['REQUEST_METHOD'] == 'GET'){?>        
                <div class="container">
                    <div class="panel panel-danger">
                       <div class="panel-heading">
                           <h3 class='panel-title'>
                              <b>SuperGlobal GET</b>
                           </h3>
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
                           <?php
                                    foreach ($form_element as $key=>$value) {
                                        echo "<tr>";
                                        echo "<td>".$key."</td>";
                                        echo "<td>".$value."</td>";
                                        echo "</tr>";
                                    }
                           ?>

                           <tr>
                               <td>modules</td>
                               <td><?php
                                   foreach ($_REQUEST['modules'] as $element) {
                                       echo("$element"." ");

                                   }
                               ?></td>
                           </tr>
                           <tr>
                               <td>textarea</td>
                               <td><?php echo $_REQUEST ["textarea"]; ?></td>
                           </tr>
                       </tbody>
                    </table>
                </div>
               
             <?php      
                          } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
                           
                ?>
        
         <div class="container">
             <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class='panel-title'>
                       <b>SuperGlobal POST</b>
                    </h3>
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
                           <?php
                                    foreach ($form_element as $key=>$value) {
                                        echo "<tr>";
                                        echo "<td>".$key."</td>";
                                        echo "<td>".$value."</td>";
                                        echo "</tr>";
                                    }
                           ?>

                           <tr>
                               <td>modules</td>
                               <td><?php
                                   foreach ($_REQUEST['modules'] as $element) {
                                       echo("$element"." ");

                                   }
                               ?></td>
                           </tr>
                           <tr>
                               <td>textarea</td>
                               <td><?php echo $_REQUEST ["textarea"]; ?></td>
                           </tr>
                       </tbody>
                    </table>
                </div>
          
         
         <?php           
           }
         ?>
     </body>

