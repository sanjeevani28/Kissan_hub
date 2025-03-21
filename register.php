<?php
session_start();
require 'connect.php'; // Include your database connection

// Registration logic for farmer
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['FSignup'])) {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Input validation
    if (empty($firstName) || empty($lastName) || empty($email) || empty($password)) {
        echo "All fields are required!";
        exit();
    }

    // Check if email exists in farmers table
    $sql = "SELECT * FROM farmers WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo "Email already exists. Please use another email.";
        exit();
    }

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert farmer into database
    $sql = "INSERT INTO farmers (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);

    if ($stmt->execute()) {
        header("Location: farmer.php"); // Redirect to farmer dashboard after registration
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Registration logic for customer
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['CSignup'])) {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Input validation
    if (empty($firstName) || empty($lastName) || empty($email) || empty($password)) {
        echo "All fields are required!";
        exit();
    }

    // Check if email exists in customers table
    $sql = "SELECT * FROM customers WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo "Email already exists. Please use another email.";
        exit();
    }

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert customer into database
    $sql = "INSERT INTO customers (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);

    if ($stmt->execute()) {
        header("Location: customer.html"); // Redirect to customer dashboard after registration
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Login logic for farmer
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['FSignin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email exists in farmers table
    $sql = "SELECT * FROM farmers WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verify password
        if (password_verify($password, $user['password'])) {
            $_SESSION['farmer_id'] = $user['id'];
            header("Location: farmer.php");
            exit();
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "No account found with that email.";
    }
}

// Login logic for customer
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['CSignin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email exists in customers table
    $sql = "SELECT * FROM customers WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verify password
        if (password_verify($password, $user['password'])) {
            $_SESSION['customer_id'] = $user['id'];
            header("Location: customer.html");
            exit();
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "No account found with that email.";
    }
}
?>
