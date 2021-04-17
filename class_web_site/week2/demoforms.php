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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "Name is required";
  } else {
    $fname = test_input($_POST["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed";
    }
  }
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
  if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
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
  First Name: <input type="text" name="fname" value="<?php echo $fname;?>">
  <span class="error">* <?php echo $fnameErr;?></span>
  <br><br>
  Last Name: <input type="text" name="lname" value="<?php echo $lname;?>">
  <span class="error">* <?php echo $lnameErr;?></span>
  <br><br>
  Married?:
  <input type="radio" name="married" <?php if (isset($married) && $married=="yes") echo "checked";?> value="yes">Yes
  <input type="radio" name="married" <?php if (isset($married) && $married=="no") echo "checked";?> value="no">No
  <span class="error">* <?php echo $marriedErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $fname;
echo "<br>";
echo $lname;
echo "<br>";
echo $married;
echo "<br>";
?>

</body>
</html>