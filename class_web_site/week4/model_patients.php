<?php

    include (__DIR__ . '/model/db.php');
    
    function getPatients () {
        global $db;
        
        $results = [];

        $stmt = $db->prepare("SELECT id, patientFirstName, patientLastName, patientMarried, patientBirthDate FROM patients ORDER BY id"); 
        
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                 
         }
         
         return ($results);
    }
    
    function addpatient ($f, $l, $m, $d) {
        global $db;
        $results = "Not added";

        $stmt = $db->prepare("INSERT INTO patients SET patientFirstName = :patientFirstName, patientLastName = :patientLastName, patientMarried = :patientMarried, patientBirthDate = :patientBirthDate");

        $binds = array(
            ":patientFirstName" => $f,
            ":patientLastName" => $l,
            ":patientMarried" => $m,
            ":patientBirthDate" => $d
        );
        
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = 'Data Added';
        }
        
        return ($results);
    }

    function updatePatient ($id, $patientFirstName, $patientLastName, $patientMarried, $patientBirthDate) {
        global $db;

        $result = "";
        
        $stmt = $db->prepare("UPDATE patients SET patientFirstName = :patientFirstName, patientLastName = :patientLastName, patientMarried = :patientMarried, patientBirthDate = :patientBirthDate WHERE id =:id");
        
        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':patientFirstName', $patientFirstName);
        $stmt->bindValue(':patientLastName', $patientLastName);
        $stmt->bindValue(':patientMarried', $patientMarried);
        $stmt->bindValue(':patientBirthDate', $patientBirthDate);

      
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $result = 'Data Updated';
        }
        
        return ($result);
    }
    
   
    
    
    function deletePatient ($id) {
        global $db;
        
        $results = "Data was not deleted";
    
        $stmt = $db->prepare("DELETE FROM patients WHERE id=:id");
        
        $stmt->bindValue(':id', $id);
            
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = 'Data Deleted';
        }
        
        return ($results);
    }
   
    function getPatient ($id) {
         global $db;
        
        $results = [];
        
        $stmt = $db->prepare("SELECT id, patientFirstName, patientLastName, patientMarried, patientBirthDate FROM patients WHERE id=:id");
        $stmt->bindValue(':id', $id);
       
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetch(PDO::FETCH_ASSOC);
                        
         }
         
         return ($results);
    }

    function getPatientMeasurements () {
        global $db;
        
        $results = [];

        $stmt = $db->prepare("SELECT patientMeasurementId, patientHeight, patientWeight, patientTemperature, patientBPSystolic, patientBPDiastolic FROM patientMeasurements ORDER BY patientMeasurementId"); 
        
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                 
         }
         
         return ($results);
    }

    function updatePatientMeasurements ($patientMeasurementId, $patientHeight, $patientWeight, $patientTemperature, $patientBPSystolic, $patientBPDiastolic) {
        global $db;

        $result = "";
        
        $stmt = $db->prepare("UPDATE patientMeasurements SET patientHeight = :patientHeight, patientWeight = :patientWeight, patientTemperature = :patientTemperature, patientBPSystolic = :patientBPSystolic, patientBPDiastolic = :patientBPDiastolic WHERE patientMeasurementId =:patientMeasurementId");
        
        $stmt->bindValue(':patientMeasurementId', $patientMeasurementId);
        $stmt->bindValue(':patientHeight', $patientHeight);
        $stmt->bindValue(':patientWeight', $patientWeight);
        $stmt->bindValue(':patientTemperature', $patientTemperature);
        $stmt->bindValue(':patientBPSystolic', $patientBPSystolic);
        $stmt->bindValue(':patientBPDiastolic', $patientBPDiastolic);

      
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $result = 'Data Updated';
        }
        
        return ($result);
    }

    function searchPatients ($column, $searchValue) {
        global $db;
          
         $results = [];
          $stmt = $db->prepare("SELECT id, patientFirstName, patientLastName, patientMarried, patientBirthDate FROM patients WHERE $column LIKE :search");
          $search = '%'.$searchValue.'%';
          
          $stmt->bindValue(':search', $search);
         
          
          if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
               $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
           }
  
           return ($results);
    }

    function sortPatients ($column, $order) {
      
        global $db;
         
         $results = [];
         
        
         $stmt = $db->prepare("SELECT id, patientFirstName, patientLastName, patientMarried, patientBirthDate FROM patients ORDER BY $column $order");
         
         
         if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
              $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                         
          }
          
          return ($results);
   }

   function getFieldNames () {
    $fieldNames = ['patientFirstName', 'patientLastName' ,'patientMarried', 'patientBirthDate'];
    
    return ($fieldNames);
    
   }

   function checkLogin ($userName, $password) {
    global $db;
    $stmt = $db->prepare("SELECT id FROM users WHERE userName =:userName AND userPassword = :password");

    $stmt->bindValue(':userName', $userName);
    $stmt->bindValue(':password', sha1($password));
    
    $stmt->execute ();
   
    return( $stmt->rowCount() > 0);
    
}



 

   

?>