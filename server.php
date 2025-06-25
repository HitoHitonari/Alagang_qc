<?php

$host = "localhost";
$username = "root";
$password = "123456";
$dbname = "accounts";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Failed: ". $conn->connect_error);
}

?>