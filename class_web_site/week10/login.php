<?php

    include_once __DIR__ . "/model_crop.php";
    include_once __DIR__ . "/functions.php";
    include __DIR__ . "/model/db.php";
    
    
    if(isset($_POST['login'])){
        $userName = mysqli_real_escape_string($con,$_POST['userName']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
    
        if ($userName = !"" && $password = !""){
    
            $sql_query = "select count(0) as cntUser from users where userName='".$userName."' and password='".$password."'";
            $result = mysqli_query($con,$sql_query);
            $row = mysqli_fetch_array($result);
    
            $count = $row['cntUser'];
    
            if($count > 0){
                $_SESSION['userName'] = $userName;
                header('Location: searchsort.php');
            }else{
                echo "Invalid username and password";
            }
    
        }
    
    }
?>



<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css">

    
        /* #mainDiv {font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;} */
        .col1 {width: 100px; float: left;}
        .col2 {float: left;}
        /* .rowContainer {clear: none; height: 40px; width: 500px;}  */
        .error {margin-left: 100px; clear: left; color: red;}

        .flex-container {
            display: flex;
            flex-direction: row;
        }

        

        
       /* h1, h2, h3{
            margin-top: 50px;
            padding-top: 10px;
            font-size: 40px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            color:#1E8449;
        } */

        body{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            text-align: center;
        }

    </style>
<title>Cropventory: Login & Register</title>
</head>
<body>
    

<div class="flex-container">
    <h3>Welcome Farmer! Please Log in.</h3>
    <div id="mainDiv">
        <form method="post" action="login.php">
           
            <div class="rowContainer">
                
            </div>
            <div class="rowContainer">
                <div class="col1">User Name:</div>
                <div class="col2"><input type="text" name="userName" value="donald"></div> 
            </div>
            <div class="rowContainer">
                <div class="col1">Password:</div>
                <div class="col2"><input type="password" name="password" value="duck"></div> 
            </div>
              <div class="rowContainer">
                <div class="col1">&nbsp;</div>
                <div class="col2"><input type="submit" name="login" value="Login" class="btn btn-warning"></div> 
            </div>
            
        </form>
        
    </div>
    </div>

    
    <div div class="flexContainer">
    <h3>Register Here</h3>
        <form method="post" action="cropRegistered.php">
            <div class="rowContainer">

            </div>
            <div class="rowContainer">
                <div class="col1">Email:</div>
                <div class="col2"><input type="text" name="userName"></div> 
            </div>
            <div class="rowContainer">
                <div class="col1">Password:</div>
                <div class="col2"><input type="password" name="password"></div> 
            </div>
            <div class="rowContainer">
                <div class="col1">Farm Name:</div>
                <div class="col2"><input type="text" name="farmName"></div> 
            </div>
              <div class="rowContainer">
                <div class="col1">&nbsp;</div>
                <div class="col2"><input type="submit" name="register" value="Register" class="btn btn-warning"></div> 
            </div>
            


        </form>
    </div>
    <div class="col-sm-offset-2 col-sm-10"><a href="./cropView.php">Enter Cropventory</a></div>
    

</body>
</html>