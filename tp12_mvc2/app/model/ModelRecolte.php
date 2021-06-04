
<!-- ----- debut Modelrecolte -->

<?php
require_once 'Model.php';

class ModelRecolte {
 private $producteur_id, $vin_id, $quantite;

 // pas possible d'avoir 2 constructeurs
 public function __construct($producteur_id = NULL, $vin_id = NULL, $quantite = NULL) {
  // valeurs nulles si pas de passage de parametres
  if (!is_null($producteur_id)) {
   $this->producteur_id = $producteur_id;
   $this->vin_id = $vin_id;
   $this->quantite = $quantite;
  }
 }

 function setProducteur_id($producteur_id) {
  $this->producteur_id = $producteur_id;
 }

 function setVin_id($vin_id) {
  $this->vin_id = $vin_id;
 }

 function setQuantite($quantite) {
  $this->quantite = $quantite;
 }

 function getProducteur_id() {
  return $this->producteur_id;
 }

 function getVin_id() {
  return $this->vin_id;
 }

 function getQuantite() {
  return $this->quantite;
 }
 

 public static function getAll() {
  try {
   $database = Model::getInstance();
   $query = "select vin.id, producteur.id as idd, region, cru, nom, prenom, quantite from vin, producteur, recolte where recolte.vin_id = vin.id and recolte.producteur_id = producteur.id order by vin.id, producteur_id";
   $statement = $database->prepare($query);
   $statement->execute(); 
   $datas = $statement->fetchAll(PDO::FETCH_ASSOC); 
   return array($datas);
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 
 public static function getAllVin() {
  try {
   $database = Model::getInstance();
   $query = "select id,cru,annee from vin";
   $query1 = "select id,nom,prenom,region from producteur";
   $statement = $database->prepare($query);
   $statement->execute();
   $datas = $statement->fetchAll(PDO::FETCH_ASSOC);
   $statement1 = $database->prepare($query1);
   $statement1->execute();
   $datas1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
   return array($datas,$datas1);
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 

 public static function insert($producteur_id,$vin_id,$quantite) {
  try {
                $database = Model::getInstance();
                $query = "select * from recolte where producteur_id = :producteur_id and vin_id = :vin_id ";
                $testExistence = $database->prepare($query);
                $testExistence->execute([        
               'producteur_id' => $producteur_id,  
                'vin_id' => $vin_id       
                ]);
             if ($testExistence->rowCount() > 0) {
               $query = "SET FOREIGN_KEY_CHECKS = 0;"
                       . "update recolte set quantite = :quantite where producteur_id = :producteur_id and vin_id = :vin_id;"
                       . "SET FOREIGN_KEY_CHECKS = 1; ";
                $statement = $database->prepare($query);
                $statement->execute([
                 'producteur_id' => $producteur_id,    
                  'vin_id' => $vin_id,              
                  'quantite' => $quantite ]);
                 return array($vin_id,$producteur_id,0);
            } else {
                // ajout d'un nouveau tuple;
                $query = "SET FOREIGN_KEY_CHECKS = 0;"
                        . "insert into recolte value ( :producteur_id, :vin_id, :quantite);"
                        . "SET FOREIGN_KEY_CHECKS = 1;";
                $statement = $database->prepare($query);
                $statement->execute([
                  'producteur_id' => $producteur_id,
                  'vin_id' => $vin_id,
                  'quantite' => $quantite
                ]);
                return array($vin_id,$producteur_id,1);                
            }              
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return -1;
  }
 }

}
?>
<!-- ----- fin Modelrecolte -->
