<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "taskmaster";
$port = 3308;

$conn = new mysqli($host, $user, $pass, $dbname, $port);

if($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

?>