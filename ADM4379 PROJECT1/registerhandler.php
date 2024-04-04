<?php
require_once "connection.php";

$fname = $lname = $email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "INSERT INTO register_user (`First Name`, `Last Name`, `Email`, `Password`) VALUES (?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssss", $fname, $lname, $email, $password);
    
   // echo "Before registration execution"; // Debug output
    if ($stmt->execute()) {
        //echo "Registration successful"; // Debug output
        header("Location: login.php");
        exit;
        //echo "After redirection"; // Debug output (This won't be reached if redirection occurs)
    } else {
       echo "Registration failed. Please try again.";
    }

    $stmt->close();
}

$con->close();
?>
