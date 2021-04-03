<?php

//A foreach loop that goes between 1 and 100.
foreach(range(1, 100) as $number){
    
    
    //If the number is divisible by both 3 and 5, then it is Fizz Buzz.
    if($number % 3 == 0 && $number % 5 == 0){
        echo 'Fizz Buzz', '<br>';
    } 
    //If the number is divisible by 3, then it is Fizz.
    elseif($number % 3 == 0){
        echo 'Fizz', '<br>';
    }
    //If the number is divisible by 5, then it is Buzz.
    elseif($number % 5 == 0){
        echo 'Buzz', '<br>';
    }
    //If it isn't divisible by 3 or 5, just print out the number.
    else{
        echo $number, '<br>';
    }
}