<?php
require __DIR__ ."/config.php";

$host = DATABASE_HOST;
$user = DATABASE_USER;
$password = DATABASE_PASSWORD; // Empty password
$database = DATABASE_NAME;

$conn = mysqli_connect($host, $user, $password, $database, 3307);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
