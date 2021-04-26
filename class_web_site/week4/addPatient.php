<?php
        
        include __DIR__ . '/model_patients.php';
        include __DIR__ . '/functions.php';
       if (isPostRequest()) {
        $patientFirstName = filter_input(INPUT_POST, 'patientFirstName');
        $patientLastName = filter_input(INPUT_POST, 'patientLastName');
        $patientMarried = filter_input(INPUT_POST, 'patientMarried');
        $patientBirthDate = filter_input(INPUT_POST, 'patientBirthDate');
        

           
           $result = addPatient ($patientFirstName, $patientLastName, $patientMarried, $patientBirthDate);
           
       }
    ?>
    

<html lang="en">
<head>
  <title>Add a Patient</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
   

    
<div class="container">
    
  <h2>Add Patient</h2>
      <!--Patients First Name input-->
  <form class="form-horizontal" action="addPatient.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="first name">Patient First Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="patientFirstName" placeholder="Enter patient first name" name="patientFirstName">
      </div>
    </div>
    <!--Patients Last Name input-->
    <div class="form-group">
      <label class="control-label col-sm-2" for="last name">Patient Last Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="patientLastName" placeholder="Enter patient Last name" name="patientLastName">
      </div>
    </div>
    <!--patient Married-->
    <div class="form-group">
      <label class="control-label col-sm-2" for="married">Married:</label>
      <div class="col-sm-10">          
        <input type="radio" id="patientMarried" placeholder="patientMarried" name="patientMarried" value="1"> Yes
        <input type="radio" id="patientMarried" placeholder="patientMarried" name="patientMarried" value="0"> No
      </div>
    </div>
    <!--patientBirthDate-->
    <div class="form-group">
      <label class="control-label col-sm-2" for="patient birth date">Patient Birthdate:</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="patientBirthDate" placeholder="11/22/1963" name="patientBirthDate">
      </div>
    </div>

    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Add Patient</button>
        <?php
            if (isPostRequest()) {
                echo "Patient successfully added!";
            }
        ?>
      </div>
    </div>
  </form>
  
  <div class="col-sm-offset-2 col-sm-10"><a href="./patientView.php">View Patients</a></div>
</div>

</body>
</html>