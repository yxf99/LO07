<?php

require_once "Module.class.php";

session_start();

class Cursus2 {
    private $listeModules;

    public function __construct() {
        if(isset($_SESSION["cursus"])) {
            $this->listeModules = $_SESSION["cursus"];
        } else {
            $this->listeModules = array();
        }
    }

    public function addModule($module) {
        $this->listeModules[$module->getSigle()] = $module;
        $_SESSION["cursus"] = $this->listeModules;
        echo "addmodule : " . $module->__tostring();
    }

    public function __toString() {
        return print_r($this, true);
    }

    public function affiche() {
        echo "<h2>Affichage d'un cursus</h2><br />";
        echo "<pre>" . $this->__tostring() . "</pre>";
    }
}

