

<?php
require ('lo07_biblio_formulaire_bt.php');
$titre = "Formulaire pour la collect d'un cursus";
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
      form_begin("LO07", "get", "cursus_action1.php");?>
      
       
      <?php
      form_input_text("Sigle1", "sigle1", "", "LO07");
      form_input_text("Label1", "label1", "", "Web");
      form_select("Catégorie1", "categorie1", "", 5, array('CS','TM','EC','ME','CT'));
      form_input_text("Effectif1", "effectif1", "", "87");  
      echo '<hr/>';
      form_input_text("Sigle2", "sigle2", "", "IF26");
      form_input_text("Label2", "label2", "", "Android");
      form_select("Catégorie2", "categorie2", "", 5, array('CS','TM','EC','ME','CT'));
      form_input_text("Effectif2", "effectif2", "", "33");  
      echo '<hr/>';
      form_input_text("Sigle3", "sigle3", "", "LO12");
      form_input_text("Label3", "label3", "", "AI");
      form_select("Catégorie3", "categorie3", "", 5, array('CS','TM','EC','ME','CT'));
      form_input_text("Effectif3", "effectif3", "", "54");  
      echo '<hr/>';
      form_input_submit("envoyer");
      form_end();
      ?>
    </div>
  </body>
</html>

