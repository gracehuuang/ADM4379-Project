<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

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
