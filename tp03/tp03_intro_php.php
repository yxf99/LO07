<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap.css" rel="stylesheet" type="text/css" />
        <title></title>
        <style>
            body{
               padding-top: 80px;
            }
             
        </style>
    </head>
    <body>
        
        <!--ex6-->
            <nav class="navbar navbar-fixed-top navbar-inverse">
                
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">Web 03</a>
                    </div>

                        <ul class="nav navbar-nav">
                            <li><a href="#ex1">Exercice 1</a></li>
                            <li><a href="#ex2">Exercice 2</a></li>
                            <li><a href="#ex3">Exercice 3</a></li>
                            <li><a href="#ex4">Exercice 4</a></li>
                            <li><a href="#ex5">Exercice 5</a></li>
                        </ul>

            </nav>
        
        <!-- ex1 -->
        <div class="container" id=ex1>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class='panel-title'>
                       <b>Exercice 1: validation de la configuration div-isi</b>
                    </h3>
                </div>                   
                <div class="panel-body text-primary" >
                   <?php                        
                         echo " Bonjour à tous "
                    ?>
                        <!-- url complet: http://localhost/lo07_tp/ -->
                </div> 
            </div>
        </div>
        
        <!-- ex2 -->
        <div class="container" id=ex2 >
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class='panel-title'>
                       <b>Exercice 2</b>
                    </h3>
                </div>
                <div class="panel-body" >              
                    <ul class="list-group text-primary" >
                        <li class="list-group-item">
                            <?php
                                $nom="Duraud";
                                $prenom="Pascal";
                                $age=32;
                                $ingenieur=FALSE;
                                echo ("Nom = ".$nom);
                            ?>
                        </li>
                        <li class="list-group-item">
                            <?php
                                echo ("Prénom = ".$prenom);
                            ?>
                        </li>
                        <li class="list-group-item">
                            <?php
                                echo ("Age = ".$age);
                            ?>
                        </li>
                        <li class="list-group-item">
                            <?php
                                echo ("Ingénieur = 1".$ingenieur);
                            ?>
                        </li>
                        <!-- les instructions php sont pour réaliser
                        les fonctionnements dans un web -->
                    </ul>
                </div>
            </div>                                
        </div>
        
        <!-- ex3 -->
        <div class="container" id=ex3>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class='panel-title'>
                       <b>Exercice 3: tableau des capitales d'afrique</b>
                    </h3>
                </div>                   
                <div class="panel-body text-primary" >                     
                        <?php echo "print_r";?>
                        <pre>
                            <?php
                                $title = "Array";
                                $capitalesAfrique = array("Alger","Bamako","Conakry","Cotonou","4","Freetown","Kampala","Lomé","Nairobi","Yamoussoukro");

                                $capitalesAfrique[]="Maputo";
                                unset($capitalesAfrique[4]);
                                print_r($capitalesAfrique);                 
                            ?>
                       </pre>
                       
                       <?php echo "foreach<br/>";?>
                    <ul class="list-group">                       
                       <?php foreach ($capitalesAfrique as $value) { ?>
                         <li class="list-group-item">
                       <?php  echo $value."<br/>"; ?>
                         </li> 
                       <?php }?>
                    </ul>
                    
                    <?php echo "Implode<br/>";?>
                    <div class="panel panel-warning">
                       <div class="panel-heading">
                            <?php echo implode(" , ", $capitalesAfrique);?>
                       </div>
                    </div>
                    
                   <?php echo "Accès aux données<br/>";?>
                    <ul class="list-group">
                        <li class="list-group-item">
                           <?php echo "Nombre d'élément = ". count($capitalesAfrique);?> 
                        </li>
                    </ul>
                    <div class="panel panel-danger">
                       <div class="panel-heading">
                            <?php 
                            sort($capitalesAfrique);
                            
                            echo "Tableau trié = ".implode(" , ", $capitalesAfrique);
                            
                            ?>                          
                       </div>
                    </div> 
                </div> 
            </div>
        </div>
        
        <!-- ex4 -->
        <div class="container" id=ex4>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class='panel-title'>
                       <b>Exercice 4: tableau des capitales d'Europe</b>
                    </h3>
                </div>
                <div class="panel-body text-primary" >
                    <?php
                    $title1 = "Array associatif"; 
                   
                    $capitalesEurope = array(  
                        "France" => "Paris",
                        "Italie" => "Rome",
                        "Belgique" => "Bruxelles",
                        "Espagne" => "Madrid",
                        "Allemagne" => "Berlin",
                        "Portugal" => "Lisbonne",  
                      );
                      
                    ?>
                    <!-- A l'intérieur d'un nouveau panel, pour obtenir et affichet la 
                    capitale de l'Allemagne, il faut écrir echo$capitaleEurope[4] -->
                    <!-- si on ajoute le couple(France,Troyes), on écrit
                    $capitalesEurope['France'] = 'Troyes'; -->
                    
                    <?php
                    foreach ($capitalesEurope as $key =>$value){
//                        echo 'Key = '.$x." ,Value = ".$x_value;
                        echo $key.'----->'.$value;
                        echo '<br/>';
                    }
                    echo '<br/>';
                    foreach ($capitalesEurope as $key =>$value){
                        echo 'Key = '.$key;
                        echo '<br/>';
                    }
                    echo '<br/>';
                    foreach ($capitalesEurope as $key =>$value){
                        echo "Value = ".$value;
                        echo '<br/>';
                    }
                    ?>
                    
                </div>
            </div>
        </div>
        
        <!-- ex5 -->
        <div class="container" id=ex5>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class='panel-title'>
                       <b>Exercice 5: fonctions</b>
                    </h3>
                </div>
                <div class="panel-body" >
                    <?php 
                    function badge_danger($label,$compteur){
                        return("<button class='btn btn-danger'>$label <span class='badge text-success'>$compteur</span></button>");
                    }
                    echo badge_danger("Web", 6);
                    echo '<br/>';
  
                    foreach ($capitalesAfrique as $label){
                        $compteur= strlen ($label);
                        echo ("<button class='btn btn-danger'>$label <span class='badge text-success'>$compteur</span></button>");
                    }

                     ?>
                    
                       
                </div>
            </div>
        </div>
        
    </body>
</html>