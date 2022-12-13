<?php

$sname= "localhost";

$unmae= "team11";

$password = "Shout4_team11_GOTEAM";

$db_name = "202310_teams_team11";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}

