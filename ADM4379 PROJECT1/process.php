<?php
    require_once('connection.php');
    session_start();


    if(isset($_POST['login'])){

        if(empty($_POST["email"]) || empty($_POST["password"])){

            header("location:login.php?Empty= Please fill in the blanks");

        }
 
    
        else{

            $query="select * from user where username='".$_POST["email"]."' and password='".$_POST["password"]."'";
            $result=mysqli_query($con, $query);
           
            if(mysqli_fetch_assoc($result)){

                $_SESSION['User']=$_POST["email"];
                header("location: General Forum.php");

            }

            else{

                header("location: login.php?Invalid= Please enter correct username and password");

            }

        }
    }

    else{

        echo "Not Working Now Guys";

    }
   
    ?>