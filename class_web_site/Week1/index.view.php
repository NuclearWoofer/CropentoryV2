  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 1</title>
    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>List of Favorite Animals done two ways.</h1>
    <h2>Shorthadn Method</h2>
    <ul>
        <<?php foreach($animals as $animal) : ?>
            <li><?= $animal; ?></li>
            <?php endforeach; ?>

            <h2>Longhanded Method</h2>
        <?php
            foreach ($animals as $animal) {

                echo "<li>$animal</li>";
            }
        ?>
    </ul>
</body>
</html>