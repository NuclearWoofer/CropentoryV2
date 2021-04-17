<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

  <title>Patient Intake Form - Michael Lopez</title>

  <?php include __DIR__ . '/../include/header.php'; ?>  <!--Directory-->


    <style type="text/css">
       .wrapper {
            display: grid;
            grid-template-columns: 180px 400px;
        }
        .label {
            text-align: right;
            padding-right: 10px;
            margin-bottom: 5px;
        }
        label {
           font-weight: bold;
        }
        input[type=text] {width: 200px;}
        .error {color: red;}
        div {margin-top: 5px;}
    </style>

        <h2>Patient Intake Form</h2>

   

    <form name="patient" method="post" action="patient.php">
        
        <div class="wrapper">
            <div class="label">
                <label>First Name:</label>
            </div>
            <div>
                <input type="text" name="fName" value="" />
            </div>
            <div class="label">
                <label>Last Name:</label>
            </div>
            <div>
                <input type="text" name="lName" value="" />
            </div>
            <div class="label">
                <label>Married:</label>
            </div>
            <div>
                <input type="radio" name="married" value="yes"  >Yes

                    
                <input type="radio" name="married" value="no"   />No
                
            </div>
            <div class="label">
                <label>Conditions:</label>
            </div>
            <div>
                                   <input type="checkbox"  name="conditions[]" value="High Blood Pressure">High Blood Pressure                                   <input type="checkbox"  name="conditions[]" value="Diabetes">Diabetes                                   <input type="checkbox"  name="conditions[]" value="Heart Condition">Heart Condition                           </div>
            <div class="label">
                <label>Birth Date:</label>
            </div>
            <div>
                <input type="date" name="birth_date" value="" />
                
                
            </div>
            <div class="label">
                <label>Height:</label>
            </div>
            <div>
            Feet: <input type="text" name="ft" value="" style="width:40px;" />
            Inches: <input type="text" name="inches" value="0" style="width:40px;" />
                
                
                
            </div>
            <div class="label">
                <label>Weight (pounds):</label>
            </div>
            <div>
                <input type="text" name="weight" value=""  style="width:40px;" />
                
                
            </div>
            <div>
                &nbsp;
            </div>
            <div>
                <input type="submit" name="submitBtn" value="Store Patient Information" />
            </div>
           
        </div>

       
    </form>
    <p>
       
    </p>


<hr />          
   
</body>

</html>

<?php include __DIR__ . '/../include/footer.php'; ?>