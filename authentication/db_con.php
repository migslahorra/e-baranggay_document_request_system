<?php

$localhost = "localhost";
$username = "root";
$password = "";
$database = "e-baranggay_document_request_system";
// Create connection
$conn = mysqli_connect($localhost, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Set the character set to utf8mb4
mysqli_set_charset($conn, "utf8mb4");
// Set the collation to utf8mb4_general_ci
mysqli_query($conn, "SET NAMES 'utf8mb4'");
mysqli_query($conn, "SET CHARACTER SET utf8mb4");
mysqli_query($conn, "SET COLLATION_CONNECTION = 'utf8mb4_general_ci'");
// Set the timezone to Asia/Manila
date_default_timezone_set('Asia/Manila');
// Start the session
session_start();

// Check if the session variable 'user_id' is set
if (!isset($_SESSION['user_id'])) {
    // If not set, redirect to the login page
    header("Location: ../authentication/login.php");
    exit();
}

// Check if the session variable 'user_type' is set
if (!isset($_SESSION['user_type'])) {
    // If not set, redirect to the login page
    header("Location: ../authentication/login.php");
    exit();
}

// Check if the session variable 'user_type' is 'admin'
if ($_SESSION['user_type'] !== 'admin') {
    // If not, redirect to the login page
    header("Location: ../authentication/login.php");
    exit();
}

// Check if the session variable 'user_type' is 'user'
if ($_SESSION['user_type'] !== 'user') {
    // If not, redirect to the login page
    header("Location: ../authentication/login.php");
    exit();
}

// Check if the session variable 'user_type' is 'staff'
if ($_SESSION['user_type'] !== 'staff') {
    // If not, redirect to the login page
    header("Location: ../authentication/login.php");
    exit();
}