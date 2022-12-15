<?php 

session_start(); 

include "DBConnection.php";
?>
<!doctype html>
<html>

<head>
<style> 

div.container{
    text-align: center;
    display:block;
    margin: 0 auto; 
    width: 75%;
}

div.gallery {
    margin: 8px;
    border: 1px solid #ccc;
    float: left;
    width: 250px;
}
  
div.gallery:hover {
    border: 1.5px solid #777;
}
  
div.gallery img {
    max-width: 100%;
    max-height: auto;
    object-fit: contain;
}
  
desc {
    padding: 15px;
    text-align: center;
}

*{
    font-family: 'Times New Roman', Times, serif;
    box-sizing: padding-box;
}

h1 {
    text-align: center;
    font-size: 20px; 
    margin-bottom: 30px;
    color: #000000;
}

h3 {
    text-align: left;
    margin-bottom: 5px;
    font-size: 15px;
    color: #000000;
}


div.row {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}

div.column {
  flex: 50%;
  padding: 0 4px;
}

</style>
</head>
<?php
$selectQuery = "SELECT * FROM plants left join store on plants.store_ID = store.store_ID;";
$result = mysqli_query($conn,$selectQuery);
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
?>
<body>
<div class="container" style="text-aligned:center;">
<h1>Plant Catalog</h1>
    <div class="row">
        <div class ="column">
            <div class="gallery">
            <a target="_blank" href="static/cereus.jpg">
                <img src="static/cereus.jpg" width="500" height="500">
            </a>
            <div class="desc">Cereus</div>
            <div class="plants_info" style="text-align:left;">
                <h3>Species: <?php echo $species; ?></h3>
                <h3>Color: <?php echo $color; ?></h3>
                <h3>Difficulty: <?php echo $diffuclty; ?></h3>
                <h3>Lighting:<?php echo $lighting; ?> </h3>
                <h3>Water: <?php echo $water; ?> </h3>
                <h3>Price Range:<?php echo $price; ?> </h3>
                <h3>Size:<?php echo $size; ?> </h3>
                <h3>Warnings: <?php echo $warning; ?></h3>
                <h3>Store Link: <?php echo $store; ?></h3>
            </div>
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
        ?>
            <div class="gallery">
            <a target="_blank" href="static/ferocactus.jpg">
                <img src="static/ferocactus.jpg" width="500" height="500">
            </a>
            <div class="desc">Ferocactus</div>
            <div class="plants_info" style="text-align:left;">
                
                <h3>Species: <?php echo $species; ?></h3>
                <h3>Color: <?php echo $color; ?></h3>
                <h3>Difficulty: <?php echo $diffuclty; ?></h3>
                <h3>Lighting:<?php echo $lighting; ?> </h3>
                <h3>Water: <?php echo $water; ?> </h3>
                <h3>Price Range:<?php echo $price; ?> </h3>
                <h3>Size:<?php echo $size; ?> </h3>
                <h3>Warnings: <?php echo $warning; ?></h3>
                <h3>Store Link: <?php echo $store; ?></h3>
            </div>
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
        ?>
            <div class="gallery">
            <a target="_blank" href="static/jade.jpg">
                <img src="static/jade.jpg" width="500" height="500">
            </a>
            <div class="desc">Jade</div>
            <div class="plants_info" style="text-align:left;">
            
                <h3>Species: <?php echo $species; ?></h3>
                <h3>Color: <?php echo $color; ?></h3>
                <h3>Difficulty: <?php echo $diffuclty; ?></h3>
                <h3>Lighting:<?php echo $lighting; ?> </h3>
                <h3>Water: <?php echo $water; ?> </h3>
                <h3>Price Range:<?php echo $price; ?> </h3>
                <h3>Size:<?php echo $size; ?> </h3>
                <h3>Warnings: <?php echo $warning; ?></h3>
                <h3>Store Link: <?php echo $store; ?></h3>
            </div>
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
        ?>
            <div class="gallery">
            <a target="_blank" href="static/burros_tail.jpg">
                <img src="static/burros_tail.jpg" width="500" height="500">
            </a>
            <div class="desc">Burro's Tail</div>
            <div class="plants_info" style="text-align:left;">
            
                <h3>Species: <?php echo $species; ?></h3>
                <h3>Color: <?php echo $color; ?></h3>
                <h3>Difficulty: <?php echo $diffuclty; ?></h3>
                <h3>Lighting:<?php echo $lighting; ?> </h3>
                <h3>Water: <?php echo $water; ?> </h3>
                <h3>Price Range:<?php echo $price; ?> </h3>
                <h3>Size:<?php echo $size; ?> </h3>
                <h3>Warnings: <?php echo $warning; ?></h3>
                <h3>Store Link: <?php echo $store; ?></h3>
            </div>
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
        ?>
            <div class="gallery">
            <a target="_blank" href="static/parlor_palm.jpg">
                <img src="static/parlor_palm.jpg" width="500" height="500">
            </a>
            <div class="desc">Parlor Palm</div>
            <div class="plants_info" style="text-align:left;">
            
                <h3>Species: <?php echo $species; ?></h3>
                <h3>Color: <?php echo $color; ?></h3>
                <h3>Difficulty: <?php echo $diffuclty; ?></h3>
                <h3>Lighting:<?php echo $lighting; ?> </h3>
                <h3>Water: <?php echo $water; ?> </h3>
                <h3>Price Range:<?php echo $price; ?> </h3>
                <h3>Size:<?php echo $size; ?> </h3>
                <h3>Warnings: <?php echo $warning; ?></h3>
                <h3>Store Link: <?php echo $store; ?></h3>
            </div>
            </div>
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
        ?><div class ="column">
            <div class="gallery">
            <a target="_blank" href="static/majesty_palm.png">
                <img src="static/majesty_palm.png" width="500" height="500">
            </a>
   
            <div class="desc">Majesty Palm</div>
            <div class="plants_info" style="text-align:left;">
                <h3>Species: <?php echo $species; ?></h3>
                <h3>Color: <?php echo $color; ?></h3>
                <h3>Difficulty: <?php echo $diffuclty; ?></h3>
                <h3>Lighting:<?php echo $lighting; ?> </h3>
                <h3>Water: <?php echo $water; ?> </h3>
                <h3>Price Range:<?php echo $price; ?> </h3>
                <h3>Size:<?php echo $size; ?> </h3>
                <h3>Warnings: <?php echo $warning; ?></h3>
                <h3>Store Link: <?php echo $store; ?></h3>
            </div>
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
        ?>
            <div class="gallery">
            <a target="_blank" href="static/african_violet.jpeg">
                <img src="static/african_violet.jpeg" width="500" height="500">
            </a>
            <div class="desc">African Violet</div>
            <div class="plants_info" style="text-align:left;">
            
                <h3>Species: <?php echo $species; ?></h3>
                <h3>Color: <?php echo $color; ?></h3>
                <h3>Difficulty: <?php echo $diffuclty; ?></h3>
                <h3>Lighting:<?php echo $lighting; ?> </h3>
                <h3>Water: <?php echo $water; ?> </h3>
                <h3>Price Range:<?php echo $price; ?> </h3>
                <h3>Size:<?php echo $size; ?> </h3>
                <h3>Warnings: <?php echo $warning; ?></h3>
                <h3>Store Link: <?php echo $store; ?></h3>
            </div>
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
        ?>
            <div class="gallery">
            <a target="_blank" href="static/pink_anthurium.jpg">
                <img src="static/pink_anthurium.jpg" width="500" height="500">
            </a>
            <div class="desc">Pink Anthurium</div>
            <div class="plants_info" style="text-align:left;">
            
                <h3>Species: <?php echo $species; ?></h3>
                <h3>Color: <?php echo $color; ?></h3>
                <h3>Difficulty: <?php echo $diffuclty; ?></h3>
                <h3>Lighting:<?php echo $lighting; ?> </h3>
                <h3>Water: <?php echo $water; ?> </h3>
                <h3>Price Range:<?php echo $price; ?> </h3>
                <h3>Size:<?php echo $size; ?> </h3>
                <h3>Warnings: <?php echo $warning; ?></h3>
                <h3>Store Link: <?php echo $store; ?></h3>
            </div>
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
        ?>
            <div class="gallery">
            <a target="_blank" href="static/delphinium.jpg">
                <img src="static/delphinium.jpg" width="500" height="500">
            </a>
            <div class="desc">Delphinium</div>
            <div class="plants_info" style="text-align:left;">
            
                <h3>Species: <?php echo $species; ?></h3>
                <h3>Color: <?php echo $color; ?></h3>
                <h3>Difficulty: <?php echo $diffuclty; ?></h3>
                <h3>Lighting:<?php echo $lighting; ?> </h3>
                <h3>Water: <?php echo $water; ?> </h3>
                <h3>Price Range:<?php echo $price; ?> </h3>
                <h3>Size:<?php echo $size; ?> </h3>
                <h3>Warnings: <?php echo $warning; ?></h3>
                <h3>Store Link: <?php echo $store; ?></h3>
            </div>
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
        ?>
            <div class="gallery">
            <a target="_blank" href="static/staghorn.jpg">
                <img src="static/staghorn.jpg" width="500" height="500">
            </a>
            <div class="desc">Staghorn Fern</div>
            <div class="plants_info" style="text-align:left;">
            
                <h3>Species: <?php echo $species; ?></h3>
                <h3>Color: <?php echo $color; ?></h3>
                <h3>Difficulty: <?php echo $diffuclty; ?></h3>
                <h3>Lighting:<?php echo $lighting; ?> </h3>
                <h3>Water: <?php echo $water; ?> </h3>
                <h3>Price Range:<?php echo $price; ?> </h3>
                <h3>Size:<?php echo $size; ?> </h3>
                <h3>Warnings: <?php echo $warning; ?></h3>
                <h3>Store Link: <?php echo $store; ?></h3>
            </div>
            </div>
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
        ?><div class ="column">
            <div class="gallery">
            <a target="_blank" href="static/alocasia.jpg">
                <img src="static/alocasia.jpg" width="500" height="500">
            </a>
   
            <div class="desc">Alocasia</div>
            <div class="plants_info" style="text-align:left;">
                <h3>Species: <?php echo $species; ?></h3>
                <h3>Color: <?php echo $color; ?></h3>
                <h3>Difficulty: <?php echo $diffuclty; ?></h3>
                <h3>Lighting:<?php echo $lighting; ?> </h3>
                <h3>Water: <?php echo $water; ?> </h3>
                <h3>Price Range:<?php echo $price; ?> </h3>
                <h3>Size:<?php echo $size; ?> </h3>
                <h3>Warnings: <?php echo $warning; ?></h3>
                <h3>Store Link: <?php echo $store; ?></h3>
            </div>
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
        ?>
            <div class="gallery">
            <a target="_blank" href="static/monstera.jpg">
                <img src="static/monstera.jpg" width="500" height="500">
            </a>
            <div class="desc">Monstera</div>
            <div class="plants_info" style="text-align:left;">
            
                <h3>Species: <?php echo $species; ?></h3>
                <h3>Color: <?php echo $color; ?></h3>
                <h3>Difficulty: <?php echo $diffuclty; ?></h3>
                <h3>Lighting:<?php echo $lighting; ?> </h3>
                <h3>Water: <?php echo $water; ?> </h3>
                <h3>Price Range:<?php echo $price; ?> </h3>
                <h3>Size:<?php echo $size; ?> </h3>
                <h3>Warnings: <?php echo $warning; ?></h3>
                <h3>Store Link: <?php echo $store; ?></h3>
            </div>
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
        ?>
            <div class="gallery">
            <a target="_blank" href="static/pothos.jpg">
                <img src="static/pothos.jpg" width="500" height="500">
            </a>
            <div class="desc">Philodendron Pothos</div>
            <div class="plants_info" style="text-align:left;">
            
                <h3>Species: <?php echo $species; ?></h3>
                <h3>Color: <?php echo $color; ?></h3>
                <h3>Difficulty: <?php echo $diffuclty; ?></h3>
                <h3>Lighting:<?php echo $lighting; ?> </h3>
                <h3>Water: <?php echo $water; ?> </h3>
                <h3>Price Range:<?php echo $price; ?> </h3>
                <h3>Size:<?php echo $size; ?> </h3>
                <h3>Warnings: <?php echo $warning; ?></h3>
                <h3>Store Link: <?php echo $store; ?></h3>
            </div>
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
        ?>
            <div class="gallery">
            <a target="_blank" href="static/fiddle_leaf.jpg">
                <img src="static/fiddle_leaf.jpg" width="500" height="500">
            </a>
            <div class="desc">Fiddle Leaf Fig</div>
            <div class="plants_info" style="text-align:left;">
            
                <h3>Species: <?php echo $species; ?></h3>
                <h3>Color: <?php echo $color; ?></h3>
                <h3>Difficulty: <?php echo $diffuclty; ?></h3>
                <h3>Lighting:<?php echo $lighting; ?> </h3>
                <h3>Water: <?php echo $water; ?> </h3>
                <h3>Price Range:<?php echo $price; ?> </h3>
                <h3>Size:<?php echo $size; ?> </h3>
                <h3>Warnings: <?php echo $warning; ?></h3>
                <h3>Store Link: <?php echo $store; ?></h3>
            </div>
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
        ?>
            <div class="gallery">
            <a target="_blank" href="static/pilea.jpg">
                <img src="static/pilea.jpg" width="500" height="500">
            </a>
            <div class="desc">Pilea Pepermoidies</div>
            <div class="plants_info" style="text-align:left;">
            
                <h3>Species: <?php echo $species; ?></h3>
                <h3>Color: <?php echo $color; ?></h3>
                <h3>Difficulty: <?php echo $diffuclty; ?></h3>
                <h3>Lighting:<?php echo $lighting; ?> </h3>
                <h3>Water: <?php echo $water; ?> </h3>
                <h3>Price Range:<?php echo $price; ?> </h3>
                <h3>Size:<?php echo $size; ?> </h3>
                <h3>Warnings: <?php echo $warning; ?></h3>
                <h3>Store Link: <?php echo $store; ?></h3>
            </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
