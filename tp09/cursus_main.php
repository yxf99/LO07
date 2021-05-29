
<?php
require_once 'Module.class.php';
require_once 'Cursus.class.php';
require_once 'Charte.class.php';
$titre = "Cursus Main";
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
$module1=new Module("lo07", "Technologies du Web", "TM","140");
$module2=new Module("if26", "Applications Mobiles Android", "TM","77");

$sigle01=$module1->getSigle();
$module01 = array ($sigle01 => $module1);
$sigle02=$module2->getSigle();
$module02 = array ($sigle02 => $module2);

$cursus1=new Cursus;

echo"<h3>Définition des modules</h3><br/>";
$module1->__toString();
$module2->__toString();

echo"<h3>Définition d'un cursus</h3><br/>";
$cursus1->addModule($module01);
$cursus1->addModule($module02);

 echo'addmodule: ';$module1->__toString();
 echo'addmodule: ';$module2->__toString();
 
echo"<h3>Affichage d'un cursus</h3><br/>";

$cursus1->affiche();
?>
</div>
  </body>
</html>

