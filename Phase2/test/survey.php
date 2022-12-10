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
        <form>
            <div class="name">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname"><br>
            </div>
        </form>

        <!--
      <input type="submit" value="Submit" />
    -->

        <br><br><br>

        <h1>Enter the state the recipient lives in:</h1> 

        <form action="#">
            <select name="languages" id="lang">
              <option value="select">Choose your state</option>
              <ul class ="drop" role="menu">
              <option value="javascript">AL</option>
              <option value="php">AK</option>
              <option value="java">AZ</option>
              <option value="golang">AR</option>
              <option value="python">CA</option>
              <option value="c#">CO</option>
              <option value="C++">CT</option>
              <option value="erlang">DE</option>
              <option value="erlang">FL</option>
              <option value="erlang">GA</option>
              <option value="erlang">HI</option>
              <option value="erlang">ID</option>
              <option value="erlang">IL</option>
              <option value="erlang">IN</option>
              <option value="erlang">IA</option>
              <option value="erlang">KS</option>
              <option value="erlang">KY</option>
              <option value="erlang">LA</option>
              <option value="erlang">ME</option>
              <option value="erlang">MD</option>
              <option value="erlang">MA</option>
              <option value="erlang">MI</option>
              <option value="erlang">MN</option>
              <option value="erlang">MS</option>
              <option value="erlang">MO</option>
              <option value="erlang">MT</option>
              <option value="erlang">NE</option>
              <option value="erlang">NV</option>
              <option value="erlang">NH</option>
              <option value="erlang">NJ</option>
              <option value="erlang">NM</option>
              <option value="erlang">NY</option>
              <option value="erlang">NC</option>
              <option value="erlang">ND</option>
              <option value="erlang">OH</option>
              <option value="erlang">OK</option>
              <option value="erlang">OR</option>
              <option value="erlang">PA</option>
              <option value="erlang">RI</option>
              <option value="erlang">SC</option>
              <option value="erlang">SD</option>
              <option value="erlang">TN</option>
              <option value="erlang">TX</option>
              <option value="erlang">UT</option>
              <option value="erlang">VT</option>
              <option value="erlang">VA</option>
              <option value="erlang">WA</option>
              <option value="erlang">WV</option>
              <option value="erlang">WI</option>
              <option value="erlang">WY</option>
            </select>
        </ul>
      </form>
   <!--
      <input type="submit" value="Submit" />
    -->
      <br>





<br><br>
        
        <h1>How often are you home?</h1>
        <h2>(This is used to determine how much you are able to water a plant)</h2>


        <h4>I am home<form action="#">
            <select name="languages" id="lang">
              <option value="select">___</option>
              <ul class ="drop" role="menu">
              <option value="javascript">0</option>
              <option value="php">1</option>
              <option value="java">2</option>
              <option value="golang">3</option>
              <option value="python">4+</option>
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
                            ><input type="radio" name="question0" value="A" /><span
                                >0</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="question0" value="B" /><span
                                >1</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="question0" value="C" /><span
                                >2</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="question0" value="D" /><span
                                >3</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="question0" value="E" /><span
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
                            ><input type="radio" name="question1" value="A" /><span
                                >0</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="question1" value="B" /><span
                                >1</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="question1" value="C" /><span
                                >2</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="question1" value="D" /><span
                                >3</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="question1" value="E" /><span
                                >4+</span
                            ></label
                        >
                    </li>
                </ul>
            </li>
            <br><br><br>


            <h1>How much sunlight do you get in your home?</h1>
            <li>
                <ul class="choices">
                    <li>
                        <label
                            ><input type="radio" name="question2" value="A" /><span
                                >Indirect</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="question2" value="B" /><span
                                >Direct</span
                            ></label
                        >
                    </li>
                    <li>
                        <label
                            ><input type="radio" name="question2" value="C" /><span
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
                                    ><input type="radio" name="question1" value="A" /><span
                                        >None</span
                                    ></label
                                >
                            </li>
                            <li>
                                <label
                                    ><input type="radio" name="question1" value="B" /><span
                                        >XS</span
                                    ></label
                                >
                            </li>
                            <li>
                                <label
                                    ><input type="radio" name="question1" value="C" /><span
                                        >S</span
                                    ></label
                                >
                            </li>
                            <li>
                                <label
                                    ><input type="radio" name="question1" value="D" /><span
                                        >M</span
                                    ></label
                                >
                            </li>
                            <li>
                                <label
                                    ><input type="radio" name="question1" value="E" /><span
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
                                    ><input type="radio" name="question2" value="A" /><span
                                        >$</span
                                    ></label
                                >
                            </li>
                            <li>
                                <label
                                    ><input type="radio" name="question2" value="B" /><span
                                        >$$</span
                                    ></label
                                >
                            </li>
                            <li>
                                <label
                                    ><input type="radio" name="question2" value="C" /><span
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
            <input type="range" min="1" max="10" value="5" oninput="rangeValue.innerText = this.value">
            <p id="rangeValue">10</p>
        </div>

        <br><br><br>
        <br><br><br>
        <br><br>

    <input type="submit" value="Find Your Plant">

</center>


    <br><br>
    


        </main>
  </body>
</html>