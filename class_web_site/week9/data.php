<?php include __DIR__ . '/../include/header.php'; ?>

<html>
    <head>
        <title>Disney Votes</title>
        <style>
            .character{
                float: left; 
                margin-right: 10px; 
                border: 10px solid black; 
                padding: 0px 10px 0px 0px; 
                width: 300px;
            }
            .main{
                margin-left: 100px; 
                margin-top: 100px;
            }
            .results{
                float: left; 
                margin-right: 10px; 
                border: 1px solid black; 
                width: 400px; 
                margin-top: 100px;
            }
            .button-div{
                margin: 10px 0px 10px 30px;
            }
            .button-size{
                width: 200px; 
                height: 50px;
            }
            h2, h3{
                margin-left: 50px;
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
            <h1>Vote for your favorite Character!</h1>
            <div class="character">
                <h3> Donald Duck</h3>
                <img src="./images/donald.png">
                <div class="button-div">
                <input type="button"  class="btn btn-success button-size" data-character-id="1"  value="Vote for Donald Duck">&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            </div>
            <div class="character">
                <h3>Goofy</h3>
                <img src="./images/goofy.png">
                <div class="button-div">
                <input type="button"  class="btn btn-success button-size" data-character-id="2"  value="Vote for Goofy">&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            </div>
            <div class="character">
                <h3>Mickey Mouse</h3>
                <img src="./images/mickey.png">
            <div class="button-div">
                <input type="button"  class="btn btn-success button-size" data-character-id="3"  value="Vote for Mickey Mouse">
            </div>
            </div>
        </div>
        <div class="container">
            <canvas id="myChart"></canvas>
          </div>
          <script>
            // Bar chart
           new Chart(document.getElementById("myChart"), {
             type: 'bar',
             data: {
               labels: ["Donald Duck", "Goofy", "Mickey Mouse"],
               datasets: [
                 {
                   label: "Number of Votes",
                   backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f"],
                   borderWidth: 10,
                   data: [102,140,160]
                 }
               ]
             },
             options: {
               legend: { display: false },
               title: {
                 display: true,
                 text: 'Number of Votes By Disney Character'
               }
             }
         });
         
           </script>
          
    </body>
</html>
<script>
    (function() {
    
     document.querySelectorAll('.btn').forEach(item => {
        item.addEventListener('click', insertVote);
      })
      
      function insertVote() {
         
          alert( this.dataset.characterId);
      }
   

})();


</script>

<?php include __DIR__ . '/../include/footer.php'; ?>