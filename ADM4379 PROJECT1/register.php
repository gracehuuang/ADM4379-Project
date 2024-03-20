<?php
require_once "connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['first name'];
    $lname = $_POST['last name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "INSERT INTO users (first name, last name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $password);

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