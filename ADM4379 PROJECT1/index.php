<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to MyTelferLife</title>
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

        <h1>Welcome to MyTelferLife</h1>
        <nav>
            <a href="index.php" class="active">Home</a>
            <a href="General Forum.php">Forums</a>
            <a href="profile.php">Profile</a>
            <a href="Course search.php">Course Info</a>
            <a href="login.php">Login</a>
        </nav>
    </header>
    <div style='float:right;' id='semester'></div>

    <section id="hero">
    <div class="hero-text">
        <h2 class="hero-heading">Welcome to the heart of Telfer student communication.</h2>
        <p>Connect with peers, access resources, and stay informed about events.</p>
        <a href="register.php" class="btn">Register Now!</a>
    </div>
    </section>

    <section id="features">
    <div class="feature">
        <div class="box">
            <h3>Forums</h3>
            <p>Engage in discussions, ask questions, and share knowledge with fellow Telfer students.</p>
            <a href="General Forum.php" class="btn">Go to Forums</a>
        </div>
    </div>
    <div class="feature">
        <div class="box">
            <h3>Profile</h3>
            <p>Manage your profile, track your progress, and connect with other members.</p>
            <a href="profile.php" class="btn">Go to Profile</a>
        </div>
    </div>
    <div class="feature">
        <div class="box">
            <h3>Course Info</h3>
            <p>Explore diverse courses offered by Telfer. Learn about subjects, professors, and terms.</p>
            <a href="course search.php" class="btn">Go to Course Info</a>
        </div>
    </div>
</section>

<script type="text/javascript">
    // Function to get the current semester
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
