<?php
session_start();
$conn = new mysqli("localhost", "root", "", "login");

$farmer_id = $_SESSION['farmer_id']; 
$amount = $_POST['amount'];
$reason = $_POST['reason'];
$type = $_POST['type'];
$date = $_POST['date'];

$stmt = $conn->prepare("INSERT INTO transactions (farmer_id, amount, reason, type, date) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("idsss", $farmer_id, $amount, $reason, $type, $date);
$stmt->execute();

$stmt->close();
$conn->close();
?>
