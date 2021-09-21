<?php
    
    include __DIR__ . '/model_crop.php';
    include __DIR__ . '/functions.php';
    if (isPostRequest()) {
        $cropId = filter_input(INPUT_POST, 'cropId');
        deleteCrop ($cropId);

    }
    $crops = getCrops ();

    if (isPostRequest()) {
        $cropName = filter_input(INPUT_POST, 'cropName');
        $cropPlanted = filter_input(INPUT_POST, 'cropPlanted');
        $cropQty = filter_input(INPUT_POST, 'cropQty');
        
           $result = addCrops ($cropName, $cropPlanted, $cropQty);
           
       }
    
?>
<html lang="en">
<head>
    <title>Cropventory</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    

</head>
<style>
    h1, h2, h3{
        padding-top: 10px;
        font-family: Arial, Helvetica, sans-serif;
        color:#7CCE44;
        text-align: center;
    }
    
    body{
        font-family: Arial, Helvetica, sans-serif;
        
    }
    th{
        color: #7CCE44;
    }
    .form-control{
        width: 260px;
    }
    .flex-container{
        float: left;
        padding: 20px;
        width: 25%;
    }
    .container{
        float: right;
        padding: 5px;
        padding: 20px;
        width: 75%;
    }


</style>

<body>

    <!--Adding Crops Feature-->
<div class="flex-container">
    <form class="form-horizontal" action="cropView.php" method="post">
    <h2>Add Crops</h2>
<!--Date the crop was planted-->
    <div class="form-group">
        <label class="control-label col-sm-2" for="cropPlanted">Today's Date: </label>
        <div class="col-sm-10">
             <input type="date" class="form-control" id="cropPlanted" placeholder="11/22/1963" name="cropPlanted">
        </div>
    </div>
    <!--Quantity of crops-->
    <div class="form-group">
        <label class="control-label col-sm-2" for="cropQty">Quantity:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="cropQty" placeholder="Enter crop quantity" name="cropQty">
        </div>
    </div>
    <!--dropdown of cropName-->
        <div class="form-group">
            <label class="control-label col-sm-2" for="cropName">Crop List: </label>
                <div class="col-sm-10">
                    <select name="cropName" id="cropName">
                        <option value="Tomato">Tomato</option>
                        <option value="Potato">Potato</option>
                        <option value="Peas">Peas</option>
                        <option value="Watermelon">Watermelon</option>
                        <option value="Pumpkin">Pumpkin</option>
                        <option value="Sunflower">Sunflower</option>
                        <option value="Cucumber">Cucumber</option>
                        <option value="Squash">Squash</option>
                    </select>
                </div>
        </div>

        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Plant this Plant!</button>
            <?php
                if (isPostRequest()) {
                  echo "Plant successfully Planted!";
                }
            ?>
            </div>
        </div>
    </form>

</div>


    <!--Existing Inventory of Crops Feature-->

    <div class="container">
        
    <div class="col-sm-offset-2 col-sm-10">
        <h1>Inventory</h1>
    
   
  
    <table class="table table-striped">
        <script>
                function addPagerToTables(tables, rowsPerPage = 10) {

    tables = 
        typeof tables == "string"
    ? document.querySelectorAll(tables)
    : tables;

    for (let table of tables) 
        addPagerToTable(table, rowsPerPage);

    }

    function addPagerToTable(table, rowsPerPage = 10) {

    let tBodyRows = table.querySelectorAll('tBody tr');
    let numPages = Math.ceil(tBodyRows.length/rowsPerPage);

    let colCount = 
    [].slice.call(
        table.querySelector('tr').cells
    )
    .reduce((a,b) => a + parseInt(b.colSpan), 0);

    table
    .createTFoot()
    .insertRow()
    .innerHTML = `<td colspan=${colCount}><div class="nav"></div></td>`;

    if(numPages == 1)
        return;

    for(i = 0;i < numPages;i++) {

        let pageNum = i + 1;

        table.querySelector('.nav')
        .insertAdjacentHTML(
            'beforeend',
            `<a href="#" rel="${i}">${pageNum}</a> `        
        );

    }

    changeToPage(table, 1, rowsPerPage);

    for (let navA of table.querySelectorAll('.nav a'))
        navA.addEventListener(
            'click', 
            e => changeToPage(
                table, 
                parseInt(e.target.innerHTML), 
                rowsPerPage
            )
        );

    }

    function changeToPage(table, page, rowsPerPage) {

    let startItem = (page - 1) * rowsPerPage;
    let endItem = startItem + rowsPerPage;
    let navAs = table.querySelectorAll('.nav a');
    let tBodyRows = table.querySelectorAll('tBody tr');

    for (let nix = 0; nix < navAs.length; nix++) {

        if (nix == page - 1)
            navAs[nix].classList.add('active');
        else 
            navAs[nix].classList.remove('active');

        for (let trix = 0; trix < tBodyRows.length; trix++) 
            tBodyRows[trix].style.display = 
                (trix >= startItem && trix < endItem)
                ? 'table-row'
                : 'none';  

    }

}
        </script>
            <thead>
                <tr>
                    <th>Crop ID</th>
                    <th>Crop/Plant Name</th>
                    <th>Date Planted</th>
                    <th>Quantity</th>
                    
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
           
            
            <?php foreach ($crops as $row): ?>
                <tr>
                    <td>
                        <form action="cropView.php" method="post">
                                <input type="hidden" name="cropId" value="<?= $row['cropId']; ?>" />
                                <button class="btn glyphicon glyphicon-trash" type="submit"></button>
                                <?php echo $row['cropId']; ?>
                            </form>
                            
                            
                   </td>
                    
                    <td><?php echo $row['cropName']; ?></td> 
                    <td><?php echo $row['cropPlanted']; ?></td> 
                    <td><?php echo $row['cropQty'] ?></td> 
                    
                    <td><a href="editCrop.php?action=update&cropId=<?= $row['cropId'] ?>">Edit Crop Info</a></td> 
                    
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        
        <br />
        <a href="editCrop.php?action=add">Add More Crops</a> 
        <br />
        <a href="./searchsort.php">Search and Sort Crops</a> 
        <br />
        <a href="login.php">Logout</a>
    </div>
    </div>
</body>

</html>
