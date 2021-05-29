<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.css" rel="stylesheet"/>
    <link href="my_css.css" rel="stylesheet" type="text/css"/>
</head>
<body>
                
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
                           
                   foreach ($_GET as $key => $value) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $key ?>
                            </td>
                            <td>
                                <?php                                
                                    echo $value; ?>
                            </td>
                        </tr>
                        <?php
                    }
                    
                    ?>
                       </tbody>
              </div>
        
</body>
</html>

