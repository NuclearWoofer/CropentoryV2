<?php include __DIR__ . '/../include/header.php'; ?>

<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$fnameErr = $lnameErr = $marriedErr = $weightErr= $bdayErr = $heightErr = $conditionsErr = "";
$fname = $lname = $married = $comment = $weight = $bday = $height = $conditions = "";

//Error catching // Requiring info

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  //first name error + special characters
  if (empty($_POST["fname"])) {
    $fnameErr = "Name is required";
  } else {
    $fname = test_input($_POST["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed";
    }
  }
  //last name error + special charachters
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["lname"])) {
      $lnameErr = "Name is required";
    } else {
      $lname = test_input($_POST["lname"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
        $lnameErr = "Only letters and white space allowed";
      }
    }
   //conditions error
    if (empty($_POST["conditions"])) {
      $conditionsErr = "conditions is required";
  } else {
      $conditions = test_input($_POST["conditions"]);
  }
    //married error
  if (empty($_POST["married"])) {
        $marriedErr = "Marraige is required";
    } else {
        $married = test_input($_POST["married"]);
    }
    //height error
    if (empty($_POST["height"])) {
      $heightErr= "Height is required";
  } else {
      $height = test_input($_POST["height"]);
  }
    //weight error
  if (empty($_POST["weight"])) {
    $weightErr= "weight is required";
} else {
    $weight = test_input($_POST["weight"]);
}
//birthday error
if (empty($_POST["bday"])) {
  $bdayErr = "bday is required";
} else {
  $bday = test_input($_POST["bday"]);
}
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Patient Intake Form - With Validations</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<!--Patient info-->
<!--First Name-->
  <label>First Name: </label>
  <input type="text" name="fname" value="<?php echo $fname;?>">
  <span class="error">* <?php echo $fnameErr;?></span>
  <br><br>
  
<!--Last Name-->
  <label>Last Name: </label>
  <input type="text" name="lname" value="<?php echo $lname;?>">
  <span class="error">* <?php echo $lnameErr;?></span>
  <br><br>

<!--Married-->
  <label>Married?:</label>
  <input type="radio" name="married" <?php if (isset($married) && $married=="yes") echo "checked";?> value="yes">Yes
  <input type="radio" name="married" <?php if (isset($married) && $married=="no") echo "checked";?> value="no">No
  <span class="error">* <?php echo $marriedErr;?></span>
  <br><br>

<!--Underlying conditions-->
  <label>Conditions:</label>
  <input type="checkbox" name="conditions" <?php if (isset($conditions) && $conditions=="high blood pressure") echo "checked";?> value="high blood pressure"> High Blood Pressure  
  <input type="checkbox" name="conditions" <?php if (isset($conditions) && $conditions=="diabetes") echo "checked";?> value="diabetes"> Diabetes
  <input type="checkbox" name="conditions" <?php if (isset($conditions) && $conditions=="heart conditions") echo "checked";?> value="heart conditions"> Heart Conditions
  <br><br>

<!--Birth date-->
<label>Date of Birth: </label>
  <input type="date" name="bday" value="<?php echo $bday;?>">
  <span class="error">* <?php echo $bdayErr;?></span>
  <br><br>
  
  <!--Height-->
  <label>Height:</label>
  Feet: <input type="text" name="height" style="width:40px" value="<?php echo $height;?>">
  Inches: <input type="text" name="height" style="width:40px" value="<?php echo $height;?>">
  <br><br>

<!--Weight-->
<label>Weight(Pounds): </label>
  <input type="text" name="weight" value="<?php echo $weight;?>">
  <br><br>

<!--Submit button-->
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo "First Name: ", $fname;
echo "<br>";
echo "Last Name: ", $lname;
echo "<br>";
echo "Marital Status: ", $married;
echo "<br>";
echo "Conditions: ", ucwords($conditions);
echo "<br>";
echo "Height: ", $height , " feet";
echo "<br>";
echo "Weight: ", $weight, "lbs";
echo "<br>";
echo "Birthdate: ", $bday;

include __DIR__ . '/../include/footer.php'; ?>

</body>
</html>