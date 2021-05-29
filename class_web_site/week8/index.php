<html>
    <head>
        <title>Teams Ajax Example</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
           <style type="text/css">
               body {margin-left: 50px; margin-top:50px;}
           </style>
    </head>
    <body>
        <div id="add_team_div">
            <h4>Add Team</h4>
            <label>Team Name</label>
            <input type="text" id="team_name" value="">
            <br />
            <label>Division&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" id="division">
            <input type="button" id="add_team" value="Add Team">
            
        </div>
        <div id="message"></div>
        <div>
            <h2>Teams</h2>
             <ul id="team_list">
                
            </ul>
        </div>
        
        
<script>
    function displayTeams (teams) {
        for (i=0; i<teams.length;i++) {
            $("#team_list").append('<li><a href="#">' + teams[i].teamName + '</a></li>');
        }
        
       
        
    }
    window.addEventListener('load', loadPage);
    const button = document.querySelector('#add_team');

    button.addEventListener('click', add_team);
    
    async function add_team () {
        var team_name = document.getElementById("team_name").value;
        var division = document.getElementById("division").value;
        
        const url = 'insert_team.php';
        const data = { team_name: team_name, division: division };

        try {
          const response = await fetch(url, {
            method: 'POST', 
            body: JSON.stringify(data), 
            headers: {
              'Content-Type': 'application/json'
            }
          });
          const id = await response.json();
          
          $("#team_list").append('<li><a href="#">' + team_name + '</a></li>');
          document.getElementById("message").innerHTML = "Added team " + team_name + ". Id: " + id;
        } catch (error) {
            console.error (error);

        }
    }
    async function loadPage (event) {
        const url = 'getTeams.php';
    
        try {
            const response = await fetch(url, {
              method: 'GET'
            });
            const json = await response.json();
            displayTeams (json);
            
          } catch (error) {
              console.error (error);

          }
    }
</script>

    </body>
</html>