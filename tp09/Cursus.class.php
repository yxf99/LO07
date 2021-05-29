<?php
require_once 'Module.class.php';
class Cursus {
    private $listeModule = array();
    
    function __construct() {
        
    }
    function addModule($module){     
//        $this->listeModules[$module->getSigle()] = $module;
        array_push( $this->listeModule,$module);       
    }
    function __toString() {
        return "Cursus($this->listeModule)<br/>\n";
    }
    function affiche(){
        echo '<pre>';
        echo "Cursus object ( ";
                print_r( $this->listeModule);
                echo ")";
        echo '</pre>';
    }
}

