<?php
session_start();

$servername = "10.177.202.26";
$username = "OD";
$password = "OD";
$dbname = "OD";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

//$conn = null;
?>