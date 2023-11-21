<?php 

function getConnect(
    $host = "localhost:3306",
    $username = "root",
    $password = "",
    $dbname = "db2303.M0"

){
    $cn = mysqli_connect($host, $username, $password, $dbname);

    if($cn == null){
        die("<h3>Cannot connect to Database $dbname !</h3>" + mysqli_connect_error());
    }
    echo "<h4>Connect successfully !</h4>";
    return $cn;
}
