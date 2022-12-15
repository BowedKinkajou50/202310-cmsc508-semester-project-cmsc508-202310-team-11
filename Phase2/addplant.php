<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
    <link rel="stylesheet" href="./addplantstyle.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
  </head>
  <body>
    <main>
        <h3>Please enter some data to create a new plant.</h3>  
        <br>
        <br>

        <center>

        <h1>Enter the ID of the plant:</h1> 
        <form method="get" action="results.php">
            <div class="name">
            <label for="fname">Plant ID:</label><br>
            <input type="text" id="fname" name="fname"><br>
        </div>
        <br><br><br>


        <h1>Enter the name of the plant:</h1> 
        <form method="get" action="results.php">
            <div class="name">
            <label for="fname">Plant name:</label><br>
            <input type="text" id="fname" name="fname"><br>
        </div>

        <br><br><br>

        <h1>Choose the plant species:</h1> 
        <ul class="quiz">
            <li>
                <ul class="choices">
                    <li>
                        <label
                            ><input type="radio" name="species" value="Cacti" /><span
                                >Cacti</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="species" value="Succulent" /><span
                                >Succulent</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="species" value="Palm" /><span
                                >Palm</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="species" value="Flowering" /><span
                                >Flowering</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="species" value="Fern" /><span
                                >Fern</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="species" value="Common House" /><span
                                >Common House</span
                            ></label
                        >
                    </li>

                </ul>
            </li>

            <br><br><br>


            <h1>Enter the color of the plant:</h1> 
        <form method="get" action="results.php">
            <div class="name">
            <label for="fname">Plant color:</label><br>
            <input type="text" id="fname" name="fname"><br>
        </div>

        <br><br><br>



        <h1>Choose the plant size:</h1> 
        <ul class="quiz">
            <li>
                <ul class="choices">
                    <li>
                        <label
                            ><input type="radio" name="size" value="XS" /><span
                                >XS</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="size" value="S" /><span
                                >S</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="size" value="M" /><span
                                >M</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="size" value="L" /><span
                                >L</span
                            ></label
                        >
                    </li>

                </ul>
            </li>

            <br><br><br>




            <h1>What is the warning for the plant?</h1> 
            <label for="warning">
                <select name="warning" id="warning">
                  <option value="select">Choose the warning</option>
                  <ul class ="drop" role="menu">
                  <option value="Safe">Safe</option>
                  <option value="Posionous Sap">Posionous Sap</option>
                  <option value="Allergies">Allergies</option>
                  <option value="Not Pet Safe">Not Pet Safe</option>
                  <option value="Not Child Safe">Not Child Safe</option>
                  <option value="Not Pet Safe + Not Child Safe">Not Pet Safe + Not Child Safe</option>
                  <option value="Not Pet Safe + Not Child Safe + Posionous Sap">Not Pet Safe + Not Child Safe + Posionous Sap</option>
                  <option value="Not Pet Safe + Not Child Safe + Allergies + Poisonous Sap">Not Pet Safe + Not Child Safe + Allergies + Poisonous Sap</option>
                </select>
            </ul>

            <br><br><br>



            <h1>What kind of lighting does the plant need?</h1>
            <li>
                <ul class="choices">
                    <li>
                        <label
                            ><input type="radio" name="sunlight" value="indirect" /><span
                                >Indirect</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="sunlight" value="direct" /><span
                                >Direct</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="sunlight" value="shade" /><span
                                >Shade</span
                            ></label
                        >
                    </li>
                </ul>
            </li>
            <br><br><br>




            <h1>How often do you need to water the plant?</h1>


        <h4>(The plant should be watered once every<form action="#">
            <select name="frequency" id="frequency">
              <option value="select">___</option>
              <ul class ="drop" role="menu">
              <option value=1>1</option>
              <option value=2>2</option>
              <option value=3>3</option>
            </select>
             week(s).)</h4>
        </ul>
      </form>
   

   <br><br>




   <h1>What climate zone should the plant be in?</h1> 
   <label for="climate">
       <select name="climate" id="climate">
         <option value="select">Climate Zone</option>
         <ul class ="drop" role="menu">
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
       </select>
   </ul>

   <br><br><br>



   <h1>How difficult is the plant?</h1>
   <h2>(1-10)</h2>

   <div class="slider">
       <input type="range" min="1" max="10" value="5" oninput="rangeValue.innerText = this.value" id = 'difficulty' name = 'difficulty'>
       <p id="rangeValue">5</p>
   </div>

   <br><br><br>
   <br><br><br>



   <h1>How expensive is the plant?</h1>
       <h2>(<span style = "color: green">$</span> - less than 20) (<span style = "color: green">$$</span> - between 20-50) (<span style = "color: green">$$$</span> - greater than 50)</h2>
       <ul class="choices">
           <li>
               <label
                   ><input type="radio" name="cost" value="$" /><span
                       >$</span
                   ></label
               >
           </li>
           <li>
               <label
                   ><input type="radio" name="cost" value="$$" /><span
                       >$$</span
                   ></label
               >
           </li>
           <li>
               <label
                   ><input type="radio" name="cost" value="$$$" /><span
                       >$$$</span
                   ></label
               >
           </li>
       </ul>
   </li>

   </ul>
   <br><br><br>


   <h1>Enter the url for the store:</h1> 
        <form method="get" action="results.php">
            <div class="name">
            <label for="fname">Store url:</label><br>
            <input type="text" id="fname" name="fname"><br>
        </div>

        <br><br><br>



        <a href = 'results.php'>
    <input type="submit" value="Enter The Plant"/>
</a>
</form>
</center>


    <br><br>
    


        </main>
  </body>
</html>

