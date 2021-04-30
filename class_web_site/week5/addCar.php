
<?php include __DIR__ . '/../include/header.php'; ?>

<?php
        
        include __DIR__ . '/model_cars.php';
        include __DIR__ . '/functions.php';
       if (isPostRequest()) {
        $carMake = filter_input(INPUT_POST, 'carMake');
        $carModel = filter_input(INPUT_POST, 'carModel');
        $carStyle = filter_input(INPUT_POST, 'carStyle');
        $carYear = filter_input(INPUT_POST, 'carYear');
        

           
           $results = addCars ($carMake, $carModel, $carStyle, $carYear);
           
       }
    ?>
    

<html lang="en">
<head>
  <title>Add a Car</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
   

    
<div class="container">
    
  <h2>Add Cars</h2>
      <!--Car Make input-->
  <form class="form-horizontal" action="addCar.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="car make">Car Make:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="carMake" placeholder="Enter car make" name="carMake">
      </div>
    </div>
    <!--Car Model input-->
    <div class="form-group">
      <label class="control-label col-sm-2" for="car model">Car Model:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="carModel" placeholder="Enter car model" name="carModel">
      </div>
    </div>
    <!--Car Style input-->
    <div class="form-group">
      <label class="control-label col-sm-2" for="car style">Car Style (Sedan, Truck, Coupe, etc.):</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="carStyle" placeholder="Enter car style" name="carStyle">
      </div>
    </div>
    <!--Car year input-->
    <div class="form-group">
      <label class="control-label col-sm-2" for="car year">Car Year Manufactured:</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="carYear" placeholder="11/22/1963" name="carYear">
      </div>
    </div>

    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Add Car</button>
        <?php
            if (isPostRequest()) {
                echo "Car successfully added!";
            }
        ?>
      </div>
    </div>
  </form>
  
  <div class="col-sm-offset-2 col-sm-10"><a href="./carsView.php">View Cars</a></div>
</div>
 

<?php include __DIR__ . '/../include/footer.php'; ?>


</body>
</html>

