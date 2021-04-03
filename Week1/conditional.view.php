<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment 3</title>
</head>

<body>

    <h1>Tasks for the day</h1>

    <ul>
        <li>
            <strong>Name: </strong> <?= $task['title']; ?>
        </li>
        <li>
            <strong>Due Date: </strong> <?= $task['due']; ?>
        </li>
        <li>
            <strong>Assigned To: </strong> <?= $task['assigned_to']; ?>
        </li>

        <li> 
            
            <strong>Status: </strong> 
            <?php 
            //  LONG HAND

            if ($task['completed']){

                echo '&#9989';

            } else {
                
                echo 'Incomplete';
            }
            
            // SHORT HAND

            //<?= $task['completed'] ? 'Complete' : 'Incomplete'; 

            ?>

        </li>
    </ul>

</body>
</html>