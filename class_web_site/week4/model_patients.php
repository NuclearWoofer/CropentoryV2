<?php

    include (__DIR__ . '/model/db.php');
    
    function getPatients () {
        global $db;
        
        $results = [];

        $stmt = $db->prepare("SELECT id, patientFirstName, patientLastName, patientMarried, patientBirthDate FROM patient ORDER BY id"); 
        
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                 
         }
         
         return ($results);
    }
    
    function addpatient ($f, $l) {
        global $db;
        $results = "Not added";

        $stmt = $db->prepare("INSERT INTO patients SET patientFirstName = :patientFirstName, patientLastName = :patientLastName, patientMarried = :patientMarried, patientBirthDate = :patientBirthDate");

        $binds = array(
            ":patientFirstName" => $f,
            ":patientLastName" => $l,
            ":patientMarried" => 1,
            ":patientBirthDate" => "01/01/1500"
        );
        
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = 'Data Added';
        }
        
        return ($results);
    }
   
    function addpatient2 ($f, $l) {
        global $db;
        $results = "Not added";

        $stmt = $db->prepare("INSERT INTO patients SET patientFirstName = :patientFirstName, patientLastName = :patientLastName, patientMarried = :patientMarried, patientBirthDate = :patientBirthDate");
       
        $stmt->bindValue(':patientFirstName', $f);
        $stmt->bindValue(':patientLastName', $l);
        $stmt->bindValue(':patientMarried', 1);
        $stmt->bindValue(':patientBirthDate', '01/01/1500');
       
        
        
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = 'Data Added';
        }
       
        $stmt->closeCursor();
       
        return ($results);
    }
   
    
       //$result = addTeam2 ('Ajax', 'Eredivisie');
       //echo $result;
    
    

?>