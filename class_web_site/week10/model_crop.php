<?php
    include (__DIR__ . '/model/db.php');

    function getCrops () {
        global $db;
        
        $results = [];

        $stmt = $db->prepare("SELECT cropId, cropName, cropPlanted, cropEstHarvest, cropQty, cropEstSell FROM cropsinventory ORDER BY cropId"); 
        
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                 
         }
         
         return ($results);
    }

        
    function addCrops ($n, $q, $d) {
        global $db;
        $results = "Not added";

        $stmt = $db->prepare("INSERT INTO cropsinventory SET cropName = :cropName, cropQty = :cropQty, cropPlanted = :cropPlanted");

        $binds = array(
            ":cropName" => $n,
            ":cropPlanted" => $d,
            ":cropQty" => $q,
            
        );
        
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = 'Seeds sown! (data added)';
        }
        
        return ($results);
    }

    