<?php
session_start();
$conn = new mysqli("localhost", "root", "", "login");

$farmer_id = $_SESSION['farmer_id']; // Get farmer ID from session

$stmt = $conn->prepare("SELECT amount, reason, type, date FROM transactions WHERE farmer_id = ?");
$stmt->bind_param("i", $farmer_id);
$stmt->execute();
$result = $stmt->get_result();

$transactions = [];
while ($row = $result->fetch_assoc()) {
    $transactions[] = $row;
}

$stmt->close();
$conn->close();

echo json_encode($transactions);
?>
