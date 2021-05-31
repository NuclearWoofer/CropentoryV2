<?php
    include (__DIR__ . '/model/db.php');

    function getCrops () {
        global $db;
        
        $results = [];

        $stmt = $db->prepare("SELECT cropId, cropName, cropPlanted, cropQty FROM cropsinventory ORDER BY cropId"); 
        
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                 
         }
         
         return ($results);
    }

           
    function getCrop ($cropId) {
        global $db;
       
       $results = [];
       
       $stmt = $db->prepare("SELECT cropId, cropName, cropPlanted, cropEstHarvest, cropQty FROM cropsinventory WHERE cropId=:cropId");
       $stmt->bindValue(':cropId', $cropId);
      
       if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
                       
        }
        
        return ($results);
   }
 
    function addCrops ($n, $q, $d) {
        global $db;
        $results = "Not added";

        $stmt = $db->prepare("INSERT INTO cropsinventory SET cropName = :cropName, cropPlanted = :cropPlanted, cropQty = :cropQty");

        $binds = array(
            ":cropName" => $n,
            ":cropPlanted" => $d,
            ":cropQty" => $q,
        );
        
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = 'Crop Added!';
        }
        
        return ($results);
    }

    
    function updateCrop ($cropId, $cropName, $cropQty, $cropPlanted) {
        global $db;

        $result = "";
        
        $stmt = $db->prepare("UPDATE cropsinventory SET cropName = :cropName, cropQty = :cropQty, cropPlanted = :cropPlanted WHERE cropId =:cropId");
        
        $stmt->bindValue(':cropId', $cropId);
        $stmt->bindValue(':cropName', $cropName);
        $stmt->bindValue(':cropQty', $cropQty);
        $stmt->bindValue(':cropPlanted', $cropPlanted);
        

      
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $result = 'Crop Updated!';
        }
        
        return ($result);
    }

        
    function deleteCrop ($cropId) {
        global $db;
        
        $results = "Data was not deleted";
    
        $stmt = $db->prepare("DELETE FROM cropsinventory WHERE cropId=:cropId");
        
        $stmt->bindValue(':cropId', $cropId);
            
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = 'Crop Deleted';
        }
        
        return ($results);
    }