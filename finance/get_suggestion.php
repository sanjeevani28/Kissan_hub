<?php
session_start();
$conn = new mysqli("localhost", "root", "", "login");

if (!isset($_SESSION['farmer_id'])) {
    die(json_encode(["success" => false, "message" => "Unauthorized access"]));
}

$farmer_id = $_SESSION['farmer_id']; // Get farmer ID dynamically

// Fetch transactions for this farmer from the database
$query = "SELECT amount, reason, type, date FROM transactions WHERE farmer_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $farmer_id);
$stmt->execute();
$result = $stmt->get_result();
$transactions = [];

while ($row = $result->fetch_assoc()) {
    $transactions[] = $row;
}

$stmt->close();
$conn->close();

// Prepare data for Flask API
$api_url = "http://127.0.0.1:5000/get_suggestions";
$data = json_encode(["farmer_id" => $farmer_id, "transactions" => $transactions]);

$options = [
    "http" => [
        "header" => "Content-Type: application/json",
        "method" => "POST",
        "content" => $data,
        "timeout" => 5 // Ensure request does not hang
    ]
];

$context = stream_context_create($options);
$response = @file_get_contents($api_url, false, $context); // Use "@" to suppress warnings

if ($response === FALSE) {
    die(json_encode(["success" => false, "message" => "Error communicating with AI server"]));
}

// Return the response from Flask (which contains suggestions)
echo $response;
?>
