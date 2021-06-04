<!-- ----- debut Controllerrecolte -->
<?php
require_once '../model/ModelRecolte.php';

class ControllerRecolte {

 // --- Liste des recoltes
 public static function recolteReadAll() {
  $results = ModelRecolte::getAll();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/recolte/viewAll.php';
  if (DEBUG)
   echo ("ControllerRecolte : recolteReadAll : vue = $vue");
  require ($vue);
 }

// // Affiche un formulaire pour sélectionner un id qui existe
//public static function recolteReadId($args)
//    {
//        if (DEBUG) {
//            echo 'ControllerRecolte:recolteReadId:begin</br>';
//        }
//        $results = ModelRecolte::getAllId();
//        $target = $args['target'];
//        if (DEBUG) {
//            echo ("ControllerRecolte：recolteReadId : target = $target</br>");
//        }
//
//        // ----- Construction chemin de la vue
//        include 'config.php';
//        $vue = $root . '/app/view/recolte/viewId1.php';
//        require($vue);
//    }
//
// // Affiche un recolte particulier (id)
// public static function recolteReadOne() {
//  $recolte_id = $_GET['id'];
//  $results = ModelRecolte::getOne($recolte_id);
//
//  // ----- Construction chemin de la vue
//  include 'config.php';
//  $vue = $root . '/app/view/recolte/viewAll.php';
//  require ($vue);
// }

 // Affiche le formulaire de creation d'un recolte
 public static function recolteCreate() {
    $results1 = ModelRecolte::getAllVin();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/recolte/viewInsert.php';
  require ($vue);
 }

 // Affiche un formulaire pour récupérer les informations d'un nouveau recolte.
 // La clé est gérée par le systeme et pas par l'internaute
 public static function recolteCreated() {
  // ajouter une validation des informations du formulaire
     
  $results = ModelRecolte::insert(
      htmlspecialchars($_GET['producteur_id']), htmlspecialchars($_GET['vin_id']), htmlspecialchars($_GET['quantite'])
  );
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/recolte/viewInserted.php';
  require ($vue);
 }
 

}
?>
<!-- ----- fin Controllerrecolte -->



