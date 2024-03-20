<?php
require_once('connection.php');
session_start();

if(isset($_POST['login'])) {
    if(empty($_POST["email"]) || empty($_POST["password"])) {
        header("location:login.php?Empty=Please fill in the blanks");
        exit; 
    } else {
        $query = "SELECT * FROM register_user WHERE displayname=? AND password=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $_POST["email"], $_POST["password"]);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0) {
            $_SESSION['User'] = $_POST["email"];
            header("location:General Forum.php");
            exit; 
        } else {
            header("location:login.php?Invalid=Please enter correct username and password");
            exit; 
        }
    }
} else {
    echo "Not Working Now Guys";
}
?>
