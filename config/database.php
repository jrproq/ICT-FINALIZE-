<?php
$server_name    = "localhost";
$username       = "root";
$password       = "root";
$database       = "jerome"; // INCLUDE THE NAME OF YOUR DATABASE HERE.
$port           = "3306"; // PALITAN MO 3307 IF EVER.

$conn = mysqli_connect(
    $server_name,
    $username,
    $password,
    $database,
    $port
);

if (!$conn) {
    die("Connection Failed:" . mysqli_connect_error());
}