<?php
require_once'WebBean.interface.php';
require_once 'Charte.class.php';

class Module implements WebBean{
    private $sigle;
    private $label;
    private $categorie;
    private $effectif;
    
//    private $listeErreurs = array();
    
    function __construct($sigle, $label, $categorie, $effectif) {
        $this->sigle = $sigle;
        $this->label = $label;
        $this->categorie = $categorie;
        $this->effectif = $effectif;
        
    }

    function getSigle() {
        return $this->sigle;
    }

    function getLabel() {
        return $this->label;
    }

    function getCategorie() {
        return $this->categorie;
    }

    function getEffectif() {
        return $this->effectif;
    }

    function setSigle($sigle): void {
        $this->sigle = $sigle;
    }

    function setLabel($label): void {
        $this->label = $label;
    }

    function setCategorie($categorie): void {
        $this->categorie = $categorie;
    }

    function setEffectif($effectif): void {
        $this->effectif = $effectif;
    }
   
    function __toString() {
        echo "Module ($this->sigle,$this->label,$this->categorie,$this->effectif)<br/>\n";
    }
   
  public function valide() {
        $resultat = true;
        $sigle = filter_input(INPUT_GET, "sigle", FILTER_SANITIZE_STRING);
       
        if(strlen($sigle)==0){
            $resultat=false;
//            $this->listeErreurs["sigle"]="sigle n'est pas défini.";
        }
            return $resultat;
  
        }
    
    public function pageKO() {
        echo Charte::html_head_bootstrap("Les WebBean Modules");
        echo("<h2>Votre page n'est pas correct</h2>");
//        foreach ($this->listeErreurs as $key=>$value) {
//            echo("$key => $value <br />\n");
//        }
        
        echo Charte::html_foot_bootstrap();
    }

  
    public function pageOK() {
        echo Charte::html_head_bootstrap("Les WebBean Modules");
        echo("<h2>Votre page est correct</h2>");
        foreach ($_GET as $key=>$value) {
            echo("$key => $value <br />\n");
        }
        echo Charte::html_foot_bootstrap();
    }

    public function sauveBDR($table) {
        echo '<b>Sauve BDR</b><br />';
        $resultat = "insert into " .$table." value(";
        $resultat .= "'".$this->sigle . "',";
        $resultat .= "'".$this->label . "',";
        $resultat .= "'".$this->categorie . "',";
        $resultat .= "'".$this->effectif . "')";
        return $resultat;
    }



    public function createTable($table) {
        echo '<b>Creat Table</b><br />';
        $resultat = "creat table " .$table."(sigle varchar(6) not null, ";
        $resultat .= "categorie varchar(2) check categorie in ('CS','TM','EC','ME','CT'), ";
        $resultat .= "label varchar(40) not null, effectif integer, primary key(sigle))<br />\n";
        return $resultat;
    }  

    public function sauveTXT() {
        echo '<b>Sauve TXT</b><br />';
        $resultat = $this->sigle.";";
        $resultat .= $this->label.";";
        $resultat .= $this->categorie.";";
        $resultat .= $this->effectif.";";
        return $resultat;
    }

    public function sauveXML($file) {
        
    }

   

}


