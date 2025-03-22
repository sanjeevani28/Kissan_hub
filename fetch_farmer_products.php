<?php
session_start();
header("Content-Type: application/json");

if (!isset($_SESSION['farmer_id'])) {
    die(json_encode(["success" => false, "message" => "Unauthorized access"]));
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["success" => false, "message" => "Connection failed: " . $conn->connect_error]));
}

$farmerId = intval($_SESSION['farmer_id']);

$sql = "SELECT name, quantity, price, mobile_no FROM products WHERE farmer_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $farmerId);
$stmt->execute();
$result = $stmt->get_result();

$products = [];
while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}

if (empty($products)) {
    echo json_encode(["success" => false, "message" => "No products found for this farmer."]);
} else {
    echo json_encode(["success" => true, "products" => $products]);
}

$stmt->close();
$conn->close();
?>
