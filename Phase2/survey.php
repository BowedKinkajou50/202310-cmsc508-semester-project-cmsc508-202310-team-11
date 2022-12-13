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
    <link rel="stylesheet" href="./surveycss.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
  </head>
  <body>
    <main>
        <h3>Please enter some data we need to find the perfect plant for you.</h3>  
        <br>
        <br>

        <center>

        <h1>Enter the name of the recipient:</h1> 
        <form method="get" action="results.php">
            <div class="name">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname"><br>
            </div>

        <br><br><br>

        <h1>Enter the state the recipient lives in:</h1> 

        
            <label for="states">
            <select name="states" id="states">
              <option value="select">Choose their state</option>
              <ul class ="drop" role="menu">
              <option value="AL">AL</option>
              <option value="AK">AK</option>
              <option value="AZ">AZ</option>
              <option value="AR">AR</option>
              <option value="CA">CA</option>
              <option value="CO">CO</option>
              <option value="CT">CT</option>
              <option value="DE">DE</option>
              <option value="FL">FL</option>
              <option value="GA">GA</option>
              <option value="HI">HI</option>
              <option value="ID">ID</option>
              <option value="IL">IL</option>
              <option value="IN">IN</option>
              <option value="IA">IA</option>
              <option value="KS">KS</option>
              <option value="KY">KY</option>
              <option value="LA">LA</option>
              <option value="ME">ME</option>
              <option value="MD">MD</option>
              <option value="MA">MA</option>
              <option value="MI">MI</option>
              <option value="MN">MN</option>
              <option value="MS">MS</option>
              <option value="MO">MO</option>
              <option value="MT">MT</option>
              <option value="NE">NE</option>
              <option value="NV">NV</option>
              <option value="NH">NH</option>
              <option value="NJ">NJ</option>
              <option value="NM">NM</option>
              <option value="NY">NY</option>
              <option value="NC">NC</option>
              <option value="ND">ND</option>
              <option value="OH">OH</option>
              <option value="OK">OK</option>
              <option value="OR">OR</option>
              <option value="PA">PA</option>
              <option value="RI">RI</option>
              <option value="SC">SC</option>
              <option value="SD">SD</option>
              <option value="TN">TN</option>
              <option value="TX">TX</option>
              <option value="UT">UT</option>
              <option value="VT">VT</option>
              <option value="VA">VA</option>
              <option value="WA">WA</option>
              <option value="WV">WV</option>
              <option value="WI">WI</option>
              <option value="WY">WY</option>
            </select>
        </ul>
     

      <br>





<br><br>
        
        <h1>How often are you home?</h1>
        <h2>(This is used to determine how much you are able to water a plant)</h2>


        <h4>They are home<form action="#">
            <select name="frequency" id="frequency">
              <option value="select">___</option>
              <ul class ="drop" role="menu">
              <option value=0>0</option>
              <option value=1>1</option>
              <option value=2>2</option>
              <option value=3>3</option>
              <option value=4>4+</option>
            </select>
        </ul>
      </form>
   times a week.</h4>

   <br><br><br>



   
        <h1>How many kids do you have?</h1>

        <ul class="quiz">
            <li>
                <ul class="choices">
                    <li>
                        <label
                            ><input type="radio" name="kids" value="0" /><span
                                >0</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="kids" value="1" /><span
                                >1</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="kids" value="2" /><span
                                >2</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="kids" value="3" /><span
                                >3</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="kids" value="4+" /><span
                                >4+</span
                            ></label
                        >
                    </li>
                </ul>
            </li>
            <br><br>
            <br>            


            <h1>How many pets do you have?</h1>
            <li>
                <ul class="choices">
                    <li>
                        <label
                            ><input type="radio" name="pets" value="0" /><span
                                >0</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="pets" value="1" /><span
                                >1</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="pets" value="2" /><span
                                >2</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="pets" value="3" /><span
                                >3</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="pets" value="4+" /><span
                                >4+</span
                            ></label
                        >
                    </li>
                </ul>
            </li>
            <br><br><br>


            <h1>How much sunlight do you get in their home?</h1>
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


            
            <h1>Do you have a plant size preference?</h1>
                    <li>
                        
                        <ul class="choices">
                            <li>
                                <label
                                    ><input type="radio" name="size" value="A" /><span
                                        >None</span
                                    ></label
                                >
                            </li>
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
                                    ><input type="radio" name="question3" value="L" /><span
                                        >L</span
                                    ></label
                                >
                            </li>
                        </ul>
                    </li>
<br><br><br>



                    <h1>How much money do you want to spend on this plant?</h1>
                    <li>
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




 
        <h1>How difficult do you want this plant to be?</h1>
        <h2>(extra easy: 1-2) (easy: 2-3) (medium: 5-6) (hard: 7-8) (super hard: 9-10)</h2>

        <div class="slider">
            <input type="range" min="1" max="10" value="5" oninput="rangeValue.innerText = this.value" id = 'difficulty' name = 'difficulty'>
            <p id="rangeValue">5</p>
        </div>

        <br><br><br>
        <br><br><br>
        <br><br>

        <a href = 'results.php'>
    <input type="submit" value="Find Your Plant"/>
</a>
</form>
</center>


    <br><br>
    


        </main>
  </body>
</html>