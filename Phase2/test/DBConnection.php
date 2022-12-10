<?php

$sname= "cmsc508.com";

$unmae= "phamen";

$password = "Shout4_phamen_GOME";

$db_name = "202310_teams_team11";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}

