
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
 
 
// retourne une liste des producteur_id
 public static function getAllId() {
  try {
   $database = Model::getInstance();
   $query = "select producteur_id from recolte";
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_COLUMN, 0);
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }

 // retourne une liste des quantite
 public static function getAllquantite() {
  try {
   $database = Model::getInstance();
   $query = "select DISTINCT quantite from recolte";
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_COLUMN, 0);
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 
  public static function countQuantite() {
  try {
   $database = Model::getInstance();
   $query = "SELECT COUNT(quantite) FROM recolte GROUP BY quantite;";
   $statement = $database->prepare($query);
   $statement->execute(); 
   $results = $statement->fetchAll(PDO::FETCH_COLUMN, 0);
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 
 public static function getMany($query) {
  try {
   $database = Model::getInstance();
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelRecolte");
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }

 public static function getAll() {
  try {
   $database = Model::getInstance();
   $query = "select region, cru, annee, degre, nom, prenom, quantite from vin, producteur, recolte where recolte.vin_id and recolte.producteur_id = producteur.id order by region";
   $statement = $database->prepare($query);
   $statement->execute();
   
   $cols = array();
   for($i = 0; $statement->ColumnCount(); $i++){
       $cols[$i] = $statement->getColumnMeta($i)['name'];
   }
   $datas = $statement->fetchAll(PDO::FETCH_ASSOC);
   
   return array($cols,$datas);
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
 
//  
// public static function getAllProducteur() {
//  try {
//   $database = Model::getInstance();
//   $query = "select id,nom,prenom,region from producteur";
//   $statement = $database->prepare($query);
//   $statement->execute();
//   $id = $statement->fetchAll(PDO::FETCH_COLUMN, 0);
//   $nom = $statement->fetchAll(PDO::FETCH_COLUMN, 1);
//   $prenom = $statement->fetchAll(PDO::FETCH_COLUMN, 2);
//   $region = $statement->fetchAll(PDO::FETCH_COLUMN, 3);
//   return array($id,$nom,$prenom,$region);
//  } catch (PDOException $e) {
//   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
//   return NULL;
//  }
// }
 public static function getOne($producteur_id) {
  try {
   $database = Model::getInstance();
   $query = "select * from recolte where producteur_id = :producteur_id";
   $statement = $database->prepare($query);
   $statement->execute([
     'producteur_id' => $producteur_id
   ]);
   $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelRecolte");
   return $results;
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
             if ($testExistence->rowCount() == 0) {
                // recherche de la valeur de la clé = max(producteur_id) + 1
//                $query = "select max(producteur_id),max(vin_id) from recolte";
//                $statement = $database->query($query);
//                $tuple = $statement->fetch();
//                $vin_id = $tuple['1'];
//                $producteur_id = $tuple['0'];
//                $vin_id++;
//                $producteur_id++;
//
//                // ajout d'un nouveau tuple;
//                $query = "insert into recolte value ( :producteur_id,:vin_id, :quantite)";
//                $statement = $database->prepare($query);
//                $statement->execute([
//                  'producteur_id' => $producteur_id,
//                  'vin_id' => $vin_id,
//                  'quantite' => $quantite
//                ]);
//                return [$vin_id,$producteur_id,'La nouvelle recole a été ajouté'];
                return null;
            } else {
                 $query = "update recolte set quantite = :quantite where producteur_id = :producteur_id and vin_id = :vin_id ";
                $statement = $database->prepare($query);
                $statement->execute([
                 'producteur_id' => $producteur_id,    
                  'vin_id' => $vin_id,              
                  'quantite' => $quantite
                ]);
//                    return [$vin_id,$producteur_id,'La recole a été mise à jour'];
                return $vin_id;
            }
   
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return -1;
  }
 }

 public static function update() {
  echo ("ModelRecolte : update() TODO ....");
  return null;
 }

// public static function getAllIdVin() {
//  try {
//   $database = Model::getInstance();
//   $query = "select id,cru,annee from vin";
//   $statement = $database->prepare($query);
//   $statement->execute();
//   $results = $statement->fetchAll(PDO::FETCH_COLUMN, 0);
//   return $results;
//  } catch (PDOException $e) {
//   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
//   return NULL;
//  }
// }
 
//public static function getAllIdProducteur() {
//  try {
//   $database = Model::getInstance();
//   $query = "select id,nom,pronom,region from producteur";
//   $statement = $database->prepare($query);
//   $statement->execute();
//   $results = $statement->fetchAll(PDO::FETCH_COLUMN, 1);
//   return $results;
//  } catch (PDOException $e) {
//   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
//   return NULL;
//  }
// }

}
?>
<!-- ----- fin Modelrecolte -->
