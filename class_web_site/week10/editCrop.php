<?php include __DIR__ . '/../include/header.php'; ?>


<?php
        
        include __DIR__ . '/model_crop.php';
        include __DIR__ . '/functions.php';
        
        
    
        if (isset($_GET['action'])) {
            $action = filter_input(INPUT_GET, 'action');
            $cropId = filter_input(INPUT_GET, 'cropId');

            if ($action == "update") {
                $row = getCrop($cropId);
                $cropName = $row['cropName'];
                $cropPlanted = $row['cropPlanted'];
                $cropQty = $row['cropQty'];
                $cropEstHarvest = $row['cropEstHarvest'];



            } else {
                $cropName = "";
                $cropPlanted = "";
                $cropQty = "";
                $cropEstHarvest = "";


            }
            
            
        } elseif (isset($_POST['action'])) {
            $action = filter_input(INPUT_POST, 'action');
            $cropId = filter_input(INPUT_POST, 'cropId');
            $cropName = filter_input(INPUT_POST, 'cropName');
            $cropPlanted = filter_input(INPUT_POST, 'cropPlanted');
            $cropQty = filter_input(INPUT_POST, 'cropQty');
            $cropEstHarvest = filter_input(INPUT_POST, 'cropEstHarvest');

            
        } 
            
       
       if (isPostRequest() && $action == "add") {
           $results = addCrops ($cropName, $cropPlanted, $cropQty);
           header('Location: cropView.php');
           
       } elseif (isPostRequest() && $action == "update") {
           $results = updateCrop ($cropId, $cropName, $cropPlanted, $cropQty);
           header('Location: cropView.php');
           
       }
    ?>
    

<html lang="en">
<head>
  <title><?= $action ?> Crops</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
    h2, h3{
        padding-top: 10px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        color:#1E8449;
        text-align: center;
    }
   
 

</style>
<body>

<div class="container" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
    
    <h2>Add Crops</h2>
    <h3>Here we can add more crops to your inventory.</h3>
        
    <form class="form-horizontal" action="editCrop.php" method="post">
    <input type="hidden" name="action" value="<?= $action; ?>">
      <input type="hidden" name="cropId" value="<?= $cropId; ?>">
            <!--dropdown of cropName-->
            <div class="form-group">
         <label class="control-label col-sm-2" for="pwd">Crop List</label>
         <div class="col-sm-10">
          <select name="cropName" id="cropName">
              <option value="Tomato">Tomato</option>
              <option value="Potato">Potato</option>
              <option value="Peas">Peas</option>
              <option value="Watermelon">Watermelon</option>
              <option value="Pumpkin">Pumpkin</option>
              <option value="Sunflower">Sunflower</option>
              <option value="Cucumber">Cucumber</option>
              <option value="Squash">Squash</option>
          </select>
         </div>
      </div>
  <!--Date the crop was planted-->
      <div class="form-group">
        <label class="control-label col-sm-2" for="cropPlanted">Date Crop Planted: </label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="cropPlanted" placeholder="11/22/1963" name="cropPlanted" value="01/01/2001">
        </div>
      </div>
      <!--Quantity of crops-->
      <div class="form-group">
        <label class="control-label col-sm-2" for="cropQty">Quantity: </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="cropQty" placeholder="Enter crop quantity" name="cropQty" <?= $cropQty; ?>>
        </div>
      </div>


      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">

       <!--Submit Button-->
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default"><?php echo $action; ?> Patient</button>
       
      </div>
    </div>
    </form>
    
    <div class="col-sm-offset-2 col-sm-10"><a href="./cropView.php">View Crop Inventory</a></div>
  </div>
</body>
</html>