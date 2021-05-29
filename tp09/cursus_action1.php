<?php
require_once 'Module.class.php';
require_once 'Cursus.class.php';
require_once 'Charte.class.php';
$titre = "Cursus action1";
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
echo"le résultat de l'utilisation du script cursus_action1";
$cursus2=new Cursus;

//foreach ($_GET as $key => $value) {
//    echo $key;
//    echo $value;
//}
$m2 = new Module($_GET["sigle1"], $_GET["label1"], $_GET["categorie1"], $_GET["effectif1"]);
$m3 = new Module($_GET["sigle2"], $_GET["label2"], $_GET["categorie2"], $_GET["effectif2"]);
$m4 = new Module($_GET["sigle3"], $_GET["label3"], $_GET["categorie3"], $_GET["effectif3"]);
echo"<h3>Définition des modules</h3><br/>";
$m2->__toString();
$m3->__toString();
$m4->__toString();

echo"<h3>Définition d'un cursus</h3><br/>";
$cursus2->addModule($m2);
$cursus2->addModule($m3);
$cursus2->addModule($m4);

 echo'addmodule: ';$m2->__toString();
 echo'addmodule: ';$m3->__toString();
 echo'addmodule: ';$m4->__toString();
 
echo"<h3>Affichage d'un cursus</h3><br/>";

$cursus2->affiche();

?>
</div>
  </body>
</html>

