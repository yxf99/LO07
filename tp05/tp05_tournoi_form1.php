<?php // include "lo07_biblio_formulaire_bt.php";
?>

<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.css" rel="stylesheet"/>
    <link href="my_css.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="container">
    <form action="tp05_tournoi_form2.php" method="get" style="text-align: center">
        <h2>Combien de joueurs avez-vous?</h2>
        <div style="display:inline-block;max-width:200px">
            
            <div class='form-group'>               
                <select class="form-control" name="nbJoueur">
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>                      
                    </select>
                </div>    
            
            <?php
//            form_select("", "playerNbr", "", "", range(2, 5));
//            ?>
            
        </div>
        <div style="display:inline-block;max-width:200px">
            <button type="submit" class="btn btn-primary">Submit</button>
            <?php
//            form_input_submit("envoyer");
            ?>
        </div>
    </form>
</div>
</body>
</html>
