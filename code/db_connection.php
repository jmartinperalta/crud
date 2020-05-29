<?php
$servername = "mysqljperalta.mysql.database.azure.com";
$username = "localadmin";
$password = "M4ndr4k3*346";
$db_name = "crud_app";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
