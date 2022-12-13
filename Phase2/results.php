<?php
session_start(); 

include "DBConnection.php";

$state = $_GET["states"];
$frequency = $_GET['frequency'];
$kids = $_GET['kids'];
$pets = $_GET['pets'];
$sunlight = $_GET['sunlight'];
$plantSize = $_GET['size'];
$cost = $_GET['cost'];
$difficulty = $_GET['diffuculty'];

$sql = "SELECT * FROM plants WHERE plant_id = 2";
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysqli_fetch_row($result);
echo $state;
echo $row[0]; 
echo $row[1]; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
    <link rel="stylesheet" href="./resultsstyle.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
  </head>
  <body>
    <main>

        <div id="content">
            
        <div class="title">Plant 1</div>
        <div class="title">Plant 2</div>
        <div class="title">Plant 3</div>
            
        <div class = "sec">
            <h2>Name: <?php echo $state; ?> </h2>
            <h2>Color: </h2>
            <h2>Size: </h2>
            <h2>Price: </h2>
            <h2>Water Frequency: </h2>
            <h2>Warnings: </h2>
            <h2>Description: </h2>  
        </div>
            
        
            
        <div class = "sec">
            <h2>Name: </h2>
            <h2>Color: </h2>
            <h2>Size: </h2>
            <h2>Price: </h2>
            <h2>Water Frequency: </h2>
            <h2>Warnings: </h2>
            <h2>Description: </h2>
        </div> 
            
        
            
        <div class = "sec">
            <h2>Name: </h2>
            <h2>Color: </h2>
            <h2>Size: </h2>
            <h2>Price: </h2>
            <h2>Water Frequency: </h2>
            <h2>Warnings: </h2>
            <h2>Description: </h2>
        </div>

        </div>
       
    </main>
  </body>
</html>