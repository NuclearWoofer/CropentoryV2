<?php include __DIR__ . '/../include/header.php'; ?>

<?php
    
    include __DIR__ . '/model_crop.php';
    include __DIR__ . '/functions.php';
    if (isPostRequest()) {
        $id = filter_input(INPUT_POST, 'cropId');
        deletePatient ($id);

    }
    $crops = getCrops();
    
?>
<html lang="en">
<head>
  <title>Crops Inventory</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        
    <div class="col-sm-offset-2 col-sm-10">
        <h1>Inventory</h1>
    
   
  
    <table class="table table-striped">
            <thead>
                <tr>

                    
                    <th>Crop ID</th>
                    <th>Crop/Plant Name</th>
                    <th>Date Planted</th>
                    <th>Quantity</th>
                    <th>Estimated Harvest</th>
                    <th>Estimated Sell</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
           
            
            <?php foreach ($crops as $row): ?>
                <tr>
                    <td>
                        <form action="cropView.php" method="post">
                                <input type="hidden" name="cropId" value="<?= $row['cropId']; ?>" />
                                <button class="btn glyphicon glyphicon-trash" type="submit"></button>
                                <?php echo $row['cropId']; ?>
                            </form>
                            
                            
                   </td>
                    <td><?php echo $row['cropName']; ?></td> 
                    <td><?php echo $row['cropPlanted']; ?></td> 
                    <td><?php echo $row['cropQty'] ?></td> 
                    <td><?php echo $row['cropEstHarvest']; ?></td> 
                    <td><?php echo $row['cropEstSell']; ?></td> 
                    
                    

                    <td><a href="editCrop.php?action=update&patientId=<?= $row['cropId'] ?>">Edit Crop Info</a></td> 
                    
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        
        <br />
        <a href="editCrop.php?action=add">Add More Crops</a> <!-- ADD LATER -->
        <br />
        <a href="./searchsort.php">Search and Sort Crops</a> <!-- ADD LATER -->
    </div>
    </div>
</body>

</html>

<?php include __DIR__ . '/../include/footer.php'; ?>