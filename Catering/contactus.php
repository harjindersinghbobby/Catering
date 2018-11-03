<?php

require 'connection.php';
$conn = Connect();

$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$number = $conn->real_escape_string($_POST['number']);

$query = "INSERT INTO contact(name,email,number) VALUES('" . $name . "','" . $email . "','" . $number . "')";
$success = $conn->query($query);

if (!$success){
    echo "success";
}
?>