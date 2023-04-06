<?php

$servername = "localhost";
$username = "id19705063_escola";
$password = "S3nh4-b4nc0d4d0s";
$dbname = "id19705063_db1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

?>
