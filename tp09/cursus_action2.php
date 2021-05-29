<?php
require_once 'Module.class.php';
require_once 'Cursus2.class.php';
require_once 'Charte.class.php';
$titre = "Cursus action2";
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
echo"le résultat de l'utilisation du script cursus_action2";
$m2 = new Module($_GET["sigle"], $_GET["label"], $_GET["categorie"], $_GET["effectif"]);
echo"<h3>Résultat</h3><br/>";
if($m2->valide()) {

    $m2->pageOK();
    $c = new Cursus2();
    $c->addModule($m2);

    $c->affiche();

} else {
    $m2->pageKO();
}

?>
</div>
  </body>
</html>



