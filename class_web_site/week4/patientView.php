<?php include __DIR__ . '/../include/header.php'; ?>

<?php
    
    include __DIR__ . '/model_patients.php';
    include __DIR__ . '/functions.php';
    if (isPostRequest()) {
        $id = filter_input(INPUT_POST, 'patientId');
        deletePatient ($id);

    }
    $patients = getPatients ();
    
?>
<html lang="en">
<head>
  <title>View Patients</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        
    <div class="col-sm-offset-2 col-sm-10">
        <h1>Patients On Board</h1>
    
   
  
    <table class="table table-striped">
            <thead>
                <tr>
                   
                    <th>Patient ID</th>
                    <th>Patient First Name</th>
                    <th>Patient Last Name</th>
                    <th>Married?</th>
                    <th>Birth Date</th>
                   <!--<th>Age</th>-->
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
           
            
            <?php foreach ($patients as $row): ?>
                <tr>
                    <td>
                        <form action="patientView.php" method="post">
                                <input type="hidden" name="patientId" value="<?= $row['id']; ?>" />
                                <button class="btn glyphicon glyphicon-trash" type="submit"></button>
                                <?php echo $row['id']; ?>
                            </form>
                            
                            
                   </td>
                    <td><?php echo $row['patientFirstName']; ?></td> 
                    <td><?php echo $row['patientLastName']; ?></td> 
                    <td><?php echo $row['patientMarried'] ? 'Yes' : 'No'; ?></td> 
                    <td><?php echo $row['patientBirthDate']; ?></td> 
                    
                    

                    <td><a href="editPatient.php?action=update&patientId=<?= $row['id'] ?>">Edit</a></td> 
                    
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        
        <br />
        <a href="editPatient.php?action=add">Add Patient</a>
    </div>
    </div>
</body>
</html>

<?php include __DIR__ . '/../include/footer.php'; ?>