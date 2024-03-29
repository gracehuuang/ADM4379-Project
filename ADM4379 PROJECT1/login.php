<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MyTelferLife</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
    <div style='float:right;' id='semester'></div>
    <?php
        session_start();
    
    if(isset($_SESSION['User'])){

        echo '<form action="logout.php" method="post"> 
        <button type="submit">Logout</button>
      </form> ';

    }

?> 
        <h1>Login</h1>
         <nav>
                <a href="#">Home</a>
                <a href="General Forum.php">Forums</a>
                <a href="profile.php">Profile</a>
                <a href="Course Search.php">Course Info</a>
                <a href="login.php" class="active">Login</a>
            </nav>
    </header>

    <section id="edit-profile">
        <h2>Login</h2>
        <br>

        <?php

            if(isset($_GET['Empty']) && $_GET['Empty']==true){
                echo "<div>Email and Password are required!</div>";                
        }

            if(isset($_GET['Invalid']) && $_GET['Invalid']==true){
                echo "<div>Invalid Email or Password!</div>";               
        }       

        ?>

    <form action="http://localhost/ADM-4379/process.php" method="post">

            <label for="email">Email:</label>
            <input type="text" id="email" placeholder="Username/Email" name="email">
            
            <label for="password">Password:</label>
            <input type="text" id="password" placeholder="Password" name="password">

            <button name="login">Login</button>

     </form>
        <br><br>

            <label for="register">New to MyTelferLife?</label>
           <a href="register.html">
            <button id="register">Register Here</button>
        </a>
    </section>
    
    <script type="text/javascript">
        function getSemester() {

            var today = new Date();
            var year = today.getFullYear(); 
            var month = today.getMonth() + 1; 

            var semester;
            if (month >= 1 && month <= 4) {
                semester = "Winter " + year;
            } else if (month >= 5 && month <= 8) {
                semester = "Spring/Summer " + year;
            } else {
                semester = "Fall " + year;
            }

            document.getElementById("semester").innerHTML = "<strong>Semester:</strong> " + semester;
        }

        window.onload = getSemester;
    </script>

</body>
</html>
