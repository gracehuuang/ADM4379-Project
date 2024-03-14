<?php
    
    session_start();

    function validateLogin($email, $password) {
        $validEmail = "email@email.com";
        $validPassword = "password";

        if ($email == $validEmail && $password == $validPassword) {
            return true;
            header("Location: .General Forum.html");
        } else {
            return false;
        }
    }

    function handleFormSubmission(General Forum.html) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];
            $password = $_POST["password"];

            if (validateLogin($email, $password)) {
                $_SESSION["email"] = $email;

                header(`Location: `.General Forum.html);
                exit();
            } else {

                echo "Invalid email or password";
            }
        }
    }

    handleFormSubmission();
    ?>