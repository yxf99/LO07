<?php
require_once 'Module.class.php';
require_once 'Charte.class.php';

$m = new Module($_GET["sigle"], $_GET["label"], $_GET["categorie"], $_GET["effectif"]);

if($m->valide()){
    $m->pageOK();
    echo($m->sauveTXT()."<br/>\n");
    echo ($m->createTable("modules"));
    echo($m->sauveBDR("modules"));
    
} else {
    $m->pageKO();
}