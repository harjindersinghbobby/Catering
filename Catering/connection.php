<?php
function Connect()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "root";
    $dbname = "catering";
    //Create Connection
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
    return $conn;
}
?>