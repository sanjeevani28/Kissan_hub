<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, quantity, price, mobile_no FROM products";
$result = $conn->query($sql);

if ($result) {
    $products = [];
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }

    echo json_encode(['products' => $products]);
} else {
    echo json_encode(['error' => 'No products found']);
}

$conn->close();
?>
