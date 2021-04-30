<?php include __DIR__ . '/../include/header.php'; ?>

<?php
        
        include __DIR__ . '/model_cars.php';
        $cars = getCars ();
        
    ?>
    
<html lang="en">
<head>
  <title>View Cars</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        
    <div class="col-sm-offset-2 col-sm-10">
        <h1>Cars Inv.</h1>
    
   
  
    <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Car Make</th>
                    <th>Car Model</th>
                    <th>Car Style (Hatchback, Sedan, Truck, etc)</th>
                    <th>Car Year</th>
                   
                </tr>
            </thead>
            <tbody>
           
            
            <?php foreach ($cars as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['carMake']; ?></td>
                    <td><?php echo $row['carModel']; ?></td>   
                    <td><?php echo $row['carStyle']; ?></td>           
                    <td><?php echo $row['carYear']; ?></td>  
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        
        <br />
        <a href="addCar.php">Add More Cars</a>
    </div>
    </div>
</body>
</html>

<?php include __DIR__ . '/../include/footer.php'; ?>