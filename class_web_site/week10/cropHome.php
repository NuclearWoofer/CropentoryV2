<?php include __DIR__ . '/../include/header.php'; ?>

<html>
    <head>
        <title>Disney Votes</title>
        <style>
            #tomato{
                float: left;
            }
            .main{
                text-align: center;
            }
            h1, h2, h3{
                padding-top: 10px;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                color:#1E8449;
                text-align: center;
            }
    
            body{
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        
            }
            .crop{
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                float: left;
                width: 33.33%;
                padding: 5px; 

            }
     
            .button-div{
                
                margin: 10px 0px 10px 30px;
                
            }
            .button-size{
                
                width: 200px; 
                height: 50px;
            }

        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       
    </head>

    <body>
        
        <div class="main" style="margin-left:50px; margin-top:50px;">
        <div id="tomato">
            <img src="/images/farmfresh.jpg" alt="tomato">
        </div>
            <h1>What would you like to do?</h1>
            <div class="crop">
                <h3 style="color:#1E8449;">View Your Inventory</h3>
                <img src="./images/beets.jpg">
                <div class="button-div">
                <input type="button"  class="btn btn-success button-size" value="Inventory" onclick="location.href='cropView.php';">&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            </div>
            <div class="crop">
                <h3 style="color:#1E8449;">Add More Crops</h3>
                <img src="./images/carrotNEW.jpg">
                <div class="button-div">
                <input type="button"  class="btn btn-success button-size" value="Add Crops" onclick="location.href='addCrop.php';">&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            </div>
            <div class="crop">
                <h3 style="color:#1E8449;">Learn More about The Joy of Farming</h3>
                <img src="./images/farmerNEW.jpg">
            <div class="button-div">
                <input type="button"  class="btn btn-success button-size" value="Farm Fresh RI" onclick="location.href='https://www.farmfreshri.org/';"> 
                
            </div>
            </div>
        </div>

        </body>