

<?php
require ('lo07_biblio_formulaire_bt.php');
$titre = "Formulaire pour la collect d'un module";
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.css" rel="stylesheet"/>
    <link href="my_css.css" rel="stylesheet" type="text/css"/>
    <title><?php echo $titre; ?></title>
  </head>
  <body>
    <div class="container">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title"><?php echo $titre; ?></h3>
        </div>
      </div> 
      <?php
      form_begin("LO07", "get", "module_action.php");
      form_input_text("Sigle", "sigle", "", "LO07");
      form_input_text("Label", "label", "", "Web");
      form_select("Catégorie", "categorie", "", 5, array('CS','TM','EC','ME','CT'));
      form_input_text("Effectif", "effectif", "", "87");
      form_input_submit("envoyer");
      form_end();
      ?>
    </div>
  </body>
</html>

