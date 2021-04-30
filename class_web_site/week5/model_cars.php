<?php

    include (__DIR__ . '/model/db.php');
    
    function getCars () {
        global $db;
        
        $results = [];

        $stmt = $db->prepare("SELECT id, carMake, carModel, carStyle, carYear FROM cars ORDER BY id"); 
        
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                 
         }
         
         return ($results);
    }
    
    function addCars ($a, $o, $s, $d) {
        global $db;
        $results = "Not added";

        $stmt = $db->prepare("INSERT INTO cars SET carMake = :carMake, carModel = :carModel, carStyle = :carStyle, carYear = :carYear");

        $binds = array(
            ":carMake" => $a,
            ":carModel" => $o,
            ":carStyle" => $s,
            ":carYear" => $d
        );
        
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = 'Data Added';
        }
        
        return ($results);
    }

    

?>