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

$sql = "SELECT * FROM plants left join store on plants.store_ID = store.store_ID WHERE plant_size = ''+$size + '';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$species = $row['plant_species'];
$color = $row['plant_color'];
$climate_zone = $row['plant_climate_zone'];
$diffuclty = $row['plant_difficulty'];
$lighting = $row['plant_light'];
$water = $row['plant_water'];
$price = $row['plant_price_range'];
$size = $row['plant_size'];
$warning = $row['plant_warning'];
$store = $row['store_link'];
$plant_name = $row['plant_name'];
$plant_water = $row['plant_water'];
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysqli_fetch_row($result);
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
            <h2>Name: <?php echo $plant_name; ?> </h2>
            <h2>Color:<?php echo $color; ?> </h2>
            <h2>Size: <?php echo $size; ?></h2>
            <h2>Price:<?php echo $price; ?> </h2>
            <h2>Water Frequency: <?php echo $plant_water; ?></h2>
            <h2>Warnings: <?php echo $warning; ?></h2>
            <h2>Store: <?php echo $store; ?></h2>  
        </div>
        <?php
$row = mysqli_fetch_assoc($result);
$species = $row['plant_species'];
$color = $row['plant_color'];
$climate_zone = $row['plant_climate_zone'];
$diffuclty = $row['plant_difficulty'];
$lighting = $row['plant_light'];
$water = $row['plant_water'];
$price = $row['plant_price_range'];
$size = $row['plant_size'];
$warning = $row['plant_warning'];
$store = $row['store_link'];
$plant_name = $row['plant_name'];
$plant_water = $row['plant_water'];
?>
        <div class = "sec">
        <h2>Name: <?php echo $plant_name; ?> </h2>
            <h2>Color:<?php echo $color; ?> </h2>
            <h2>Size: <?php echo $size; ?></h2>
            <h2>Price:<?php echo $price; ?> </h2>
            <h2>Water Frequency: <?php echo $plant_water; ?></h2>
            <h2>Warnings: <?php echo $warning; ?></h2> 
            <h2>Store: <?php echo $store; ?></h2>  
        </div> 
            
        <?php
        
$row = mysqli_fetch_assoc($result);
$species = $row['plant_species'];
$color = $row['plant_color'];
$climate_zone = $row['plant_climate_zone'];
$diffuclty = $row['plant_difficulty'];
$lighting = $row['plant_light'];
$water = $row['plant_water'];
$price = $row['plant_price_range'];
$size = $row['plant_size'];
$warning = $row['plant_warning'];
$store = $row['store_link'];
$plant_name = $row['plant_name'];
$plant_water = $row['plant_water'];
?>
        <div class = "sec">
        <h2>Name: <?php echo $plant_name; ?> </h2>
            <h2>Color:<?php echo $color; ?> </h2>
            <h2>Size: <?php echo $size; ?></h2>
            <h2>Price:<?php echo $price; ?> </h2>
            <h2>Water Frequency: <?php echo $plant_water; ?></h2>
            <h2>Warnings: <?php echo $warning; ?></h2> 
            <h2>Store: <?php echo $store; ?></h2>  
        </div>

        </div>
       
    </main>
  </body>
</html>