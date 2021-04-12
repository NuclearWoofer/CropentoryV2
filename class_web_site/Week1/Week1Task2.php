<?php
//**********************************************/
//FOLLOWING THE VIDEO

// $person = [
//     //the first variable acts as a key with the rest of the info acts as the content within the variable 
//     'age' => 31,

//     'hair'=> 'brown',

//     'career'=> 'web dev'

// ];

// //inserting into the array
// $person['name'] = 'Jeffery';

// // echo '<pre>';

// //viewing what vaeriable or key has what information
// var_dump($person);

// // echo '</pre>';

//END VIDEO FOLLOWING
//**********************************************/ */

//ACTUAL TASK APPLICATION
//**********************************************/ */

$tasks = [
[
    'Title' => 'Group Gym Session ',
    'Due' => 'Next Friday',
    'Assigned To' => 'Michael',
    'Completed'=> 'No'
],
[
    'Title' => 'Install New Car Part',
    'Due' => 'Yesterday',
    'Assigned To' => 'Michael',
    'Completed'=> 'Yes'
]
];

require 'task.view.php';

//ctrl + F9