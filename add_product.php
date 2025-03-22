<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ensure you're accessing the correct form field names
    $name = isset($_POST['productName']) ? $_POST['productName'] : '';
    $quantity = isset($_POST['productQuantity']) ? $_POST['productQuantity'] : '';
    $price = isset($_POST['productPrice']) ? $_POST['productPrice'] : '';
    $mobileNo = isset($_POST['productMobileNo']) ? $_POST['productMobileNo'] : '';

    

    $farmerId = $_SESSION['farmer_id'];

    $stmt = $conn->prepare("INSERT INTO products (farmer_id, name, quantity, price, mobile_no) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("isdis", $farmerId, $name, $quantity, $price, $mobileNo);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        error_log("Error executing query: " . $stmt->error);
        echo json_encode(['success' => false, 'error' => $stmt->error]);
    }

    $stmt->close();
}

$conn->close();
?>
