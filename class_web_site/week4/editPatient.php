<?php include __DIR__ . '/../include/header.php'; ?>


<?php
        
        include __DIR__ . '/model_patients.php';
        include __DIR__ . '/functions.php';
        
        
    
        if (isset($_GET['action'])) {
            $action = filter_input(INPUT_GET, 'action');
            $id = filter_input(INPUT_GET, 'patientId');
            $patientMeasurementId = filter_input(INPUT_GET, 'patientMeasurementId');
            if ($action == "update") {
                $row = getPatient($id);
                $patientFirstName = $row['patientFirstName'];
                $patientLastName = $row['patientLastName'];
                $patientMarried = $row['patientMarried'];
                $patientBirthDate = $row['patientBirthDate'];
                //New Measurements
                
                $row = getPatientMeasurements($patientMeasurementId);
                $patientHeight = $row['patientHeight'];
                $patientWeight = $row['patientWeight'];
                $patientBPSystolic = $row['patientBPSystolic'];
                $patientBPDiastolic = $row['patientBPDiastolic'];
                $patientTemperature = $row['patientTemperature'];



            } else {
                $patientFirstName = "";
                $patientLastName = "";
                $patientMarried = "";
                $patientBirthDate = "";
                //new measurements
                $patientHeight = "";
                $patientWeight = "";
                $patientBPSystolic = "";
                $patientBPDiastolic = "";
                $patientTemperature = "";

            }
            
            
        } elseif (isset($_POST['action'])) {
            $action = filter_input(INPUT_POST, 'action');
            $id = filter_input(INPUT_POST, 'patientId');
            $patientMeasurementId = filter_input(INPUT_GET, 'patientMeasurementId');
            $patientFirstName = filter_input(INPUT_POST, 'patientFirstName');
            $patientLastName = filter_input(INPUT_POST, 'patientLastName');
            $patientMarried = filter_input(INPUT_POST, 'patientMarried');
            $patientBirthDate = filter_input(INPUT_POST, 'patientBirthDate');
            //New Measurements
            $patientMeasurementId = filter_input(INPUT_POST, 'patientMeasurementId');
            $patientHeight = filter_input(INPUT_POST, 'patientHeight');
            $patientWeight = filter_input(INPUT_POST, 'patientWeight');
            $patientBPSystolic = filter_input(INPUT_POST, 'patientBPSystolic');
            $patientBPDiastolic = filter_input(INPUT_POST, 'patientBPDiastolic');
            $patientTemperature = filter_input(INPUT_POST, 'patientTemperature');

            
        } 
            
       
       if (isPostRequest() && $action == "add") {
       
           $results = addPatient ($patientFirstName, $patientLastName, $patientMarried, $patientBirthDate);
           header('Location: patientView.php');
           
       } elseif (isPostRequest() && $action == "update") {
           $result = updatePatient ($id, $patientFirstName, $patientLastName, $patientMarried, $patientBirthDate);
           header('Location: patientView.php');
           
       }
    ?>
    

<html lang="en">
<head>
  <title><?= $action ?> Patients</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
   

    
<div class="container">
    
  <h2>Add Patient</h2>
  <form class="form-horizontal" action="editPatient.php" method="post">
      <input type="hidden" name="action" value="<?= $action; ?>">
      <input type="hidden" name="patientId" value="<?= $id; ?>">
            <!--Patients First Name input-->

    <div class="form-group">
      <label class="control-label col-sm-2" for="patient first name">Patient First Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="patientFirstName" placeholder="Enter patient first name" name="patientFirstName" value="<?= $patientFirstName; ?>">
      </div>
    </div>
        <!--Patients Last Name input-->

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Patient Last Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="patientLastName" placeholder="Enter patient Last Name" name="patientLastName" value="<?= $patientLastName; ?>">
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


       <!--Submit Button-->
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default"><?php echo $action; ?> Patient</button>
       
      </div>
    </div>
  </form>


<!--NEW Patient Measurements-->
<div class="container">
  <h2>Patient Measurements</h2>
  <form name="measurement" method="POST" action="editPatient.php">
  <input type="hidden" name="patientId" value="59">

    <!--patientHeight-->
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Height</label>
    <div class="col-sm-10">          
      <input type="text" class="form-control" id="patientHeight" placeholder="5" name="patientHeight" value="<?= $patientHeight; ?>">
    </div>
  </div>
    <!--patientWeight-->
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Weight</label>
    <div class="col-sm-10">          
      <input type="text" class="form-control" id="patientWeight" placeholder="5" name="patientWeight" value="<?= $patientWeight; ?>">
    </div>
  </div>
      <!--patientBPSystolic & patientBPDiastolic-->
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Blood Pressure</label>
    <div class="col-sm-10">          
      <input type="text" class="form-control" id="patientBPSystolic" placeholder="5" name="systolic" value="<?= $patientBPSystolic; ?>">
      <label>/</label>
      <input type="text" class="form-control" id="patientBPDiastolic" placeholder="5" name="diastolic" value="<?= $patientBPDiastolic; ?>">
    </div>
  </div>
       <!--patient temperature-->
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Patient Temperature</label>
    <div class="col-sm-10">          
      <input type="text" class="form-control" id="patientTemperature" placeholder="5" name="patientTemperature" value="<?= $patientTemperature; ?>">
    </div>
  </div>

  <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default"><?php echo $action; ?> Submit Patient Measurements</button>
       
      </div>
    </div>
  </form>

</div>
</form>
<div class="col-sm-offset-2 col-sm-10"><a href="./patientView.php">View Patients</a></div>
</body>
</html>