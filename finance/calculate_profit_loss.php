<?php
session_start();
$conn = new mysqli("localhost", "root", "", "login");

$farmer_id = $_SESSION['farmer_id']; // Get farmer ID dynamically

$result = $conn->query("SELECT SUM(CASE WHEN type='earned' THEN amount ELSE -amount END) AS balance FROM transactions 
                                WHERE farmer_id= $farmer_id");
$row = $result->fetch_assoc();
$balance = $row["balance"];

echo ($balance >= 0) ? "Profit: ₹$balance" : "Loss: ₹" . abs($balance);
$conn->close();
?>
