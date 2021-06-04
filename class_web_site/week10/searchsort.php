<?php include __DIR__ . '/../include/header.php'; ?>

<?php

    
    include __DIR__ . '/model_crop.php';
    $action = filter_input(INPUT_POST, 'action');
    $fieldName = filter_input(INPUT_POST, 'fieldName');
    $fieldValue = filter_input(INPUT_POST, 'fieldValue');
    if ( $action === 'sort' && $fieldName != '' ) {
            $crops = sortCrops ($fieldName, $fieldValue);   
    }
    else if ( $action === 'search' && $fieldName != '' ) {
            $crops = searchCrops ($fieldName, $fieldValue);
    } else {
        $crops = getcrops ();  
    }

    if(isset($_POST['logout'])){
        session_destroy();
        header('Location: login.php');
    }

?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
            <meta charset="UTF-8">
    <style type="text/css">
        body {margin-left: 20px;}
    </style>
        <title>Search and Sort Crops</title>
    </head>
    <body>
 
        <?php
            include __DIR__ . '/includes/searchFrom.php';
            include __DIR__ . '/includes/sortForm.php';
            include __DIR__ . '/includes/view.php';
        ?>
    </body>

    <input type="submit" value="Logout" name="logout">
    <div style="padding: 10px;"><a href="./addCrop.php">Add Crops</a></div>
    
    <div class="padding: 10px;"><a href="./cropView.php">View Crops</a></div>
</html>

<?php include __DIR__ . '/../include/footer.php'; ?>