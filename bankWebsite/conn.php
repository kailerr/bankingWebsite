<?php
$localhost = 'localhost';
$username = 'root';
$password  = '';
$database_name  = 'bankregistration';

$conn = mysqli_connect($localhost, $username, $password, $database_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "";
}