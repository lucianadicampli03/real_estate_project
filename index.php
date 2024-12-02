<?php
include 'db_connection.php'; // Include the database connection

// Query to get all properties
$query = "SELECT * FROM property";
$result = $conn->query($query);

echo "<h1>Property Listings</h1>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Address: " . $row["address"] . " - Price: $" . $row["price"] . "<br>";
    }
} else {
    echo "No properties found.";
}

$conn->close();
?>
