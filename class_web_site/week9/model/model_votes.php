<?php

    include (__DIR__ . '/db.php');

    function getVotes () {
        global $db;
        
        $results = [];
        $stmt = $db->prepare("SELECT DisneyVoteID, DisneyCharacterID FROM DisneyVotes");
     
        
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        
         }
         
         return ($results);
    }