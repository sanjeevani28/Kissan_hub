<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, quantity, price, mobile_no FROM products";
$result = $conn->query($sql);

// Debugging: Check if the query ran successfully
if ($result) {
    $products = [];
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }

    // Output products for debugging
    echo json_encode(['products' => $products]);
} else {
    // Error handling if no products found
    echo json_encode(['error' => 'No products found']);
}

$conn->close();
?>
