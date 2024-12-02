<?php
$conn = new mysqli("localhost", "root", "", "real_estate");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
