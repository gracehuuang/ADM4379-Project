<?php

<?php
// Database configuration
$db_host = 'localhost'; // Change this to your database server hostname
$db_user = 'root'; // Change this to your database username
$db_password = 'root'; // Change this to your database password
$db_db = 'MyTelferLife'; // Change this to your database name
$db_port = '8889'; // Change this to your database port if needed

// Create connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_db, $db_port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>
require_once "connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $fname, $email, $password);

    if($stmt-> execute()) {
        header("Location: login.php");
        exit;
    } else {
        echo "Error: Please try again.";
    }

    $stmt->close();
    

}

$conn->close();
?>
