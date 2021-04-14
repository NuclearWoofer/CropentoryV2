<?php

require "patientIntake.view.php";

function age($bdate){
    $date = new DateTime($bdate);
    $now = new DateTime();
    $interval = $now->diff($date);

    return $interval->y;
}

function isDate($dt) {

    try {

        $d = new DateTime($dt);

        return (true);

    } catch(Exception $e) {

        return false;

    }

}

function bmi ($ft, $inch, $weight) 
{

    // you will need to write

}

  
function bmiDescription ($bmi) 
{

    // you will need to write

}