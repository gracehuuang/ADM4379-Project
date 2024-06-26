<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM 4379</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    
    <header>
        <div style='float:right;' id='semester'></div>
    
<?php
        session_start();
    
    if(isset($_SESSION['User'])){

        echo 'Welcome ' . $_SESSION['User'] . '<br/>';
        echo '<form action="logout.php" method="post"> 
        <button type="submit">Logout</button>
      </form> ';

    }

?>      

        <h1>Forums</h1>

            <nav>
                <a href="index.php">Home</a>
                <a href="Forum_Home.php" class="active">Forums</a>
                <a href="profile.php">Profile</a>
                <a href="Course Search.php">Course Info</a>
                <a href="login.php">Login</a>
            </nav>
    </header>

    <section id="forum-categories">
        <div class="category">
            <h2>General</h2>
            <ul>
                <!--Not real pages are linked. Only for display -->
                <li><a>General Forum</a></li>
                <li><a>Co-op Students</a></li>
                <li><a>Learning Oportunities</a></li>

            </ul>
        </div>
        
        <div class="category">
            <h2>Classes</h2>
            <ul>
                <li><span class="subtitle">First Year Courses</span></li>
                <!--Not real pages are linked. Only for display -->
                <li><a>ADM 1300</a></li> 
                <li><a>ADM 1370</a></li>
                <li><a>ECO 1102</a></li>
                <li><a>ECO 1104</a></li>

                <li><span class="subtitle"> Second Year Courses</span></li>
                <!--Not real pages are linked. Only for display -->
                <li><a>ADM 2302</a></li>
                <li><a>ADM 2303</a></li>
                <li><a>ADM 2320</a></li>
                <li><a>ADM 2372</a></li>


                <li><span class="subtitle">Third Year Courses</span></li>
                <!--Not real pages are linked. Only for display -->
                <li><a>ADM 3301</a></li>
                <li><a>ADM 3308</a></li>
                <li><a>ADM 3318</a></li>
                <li><a>ADM 3379</a></li>

                <li><span class="subtitle">Fourth Year Courses</span></li>
                <!--Only ADM 4379 has a php page. The rest are for display.-->
                <li><a>ADM 4311</a></li>
                <li><a>ADM 4377</a></li>
                <li><a>ADM 4378</a></li>
                <li><a href="forum_ADM4379.php">ADM 4379</a></li>
        
              
            </ul>
        </div>

        <div class="category">
            <h2>Programs</h2>
            <ul>
                <!--Not real pages are linked. Only for display -->
                <li><a>Accounting</a></li>
                <li><a>Business Analytics</a></li>
                <li><a>Business Technology Management</a></li>
                <li><a>Entrepreneurship</a></li>
                <li><a>Finance</a></li>
                <li><a>Healthcare Analytics</a></li>
                <li><a>Human Resources Management</a></li>
                <li><a>International Management</a></li>
                <li><a>Management</a></li>
                <li><a>Marketing</a></li>
            </ul>
        </div>

        <div class="category">
            <h2>Clubs</h2>
            <ul>
                 <!--Not real pages are linked. Only for display -->
                <li><a>Telfer Student Association</a></li>
                <li><a>MBA Student Association</a></li>
                <li><a>MHA Student Association</a></li>
                <li><a>Telfer Research Students Association</a></li>
                <br>
                <li><a>Accounting Club</a></li>
                <li><a>AIESEC</a></li>
                <li><a>CASCO</a></li>
                <li><a>ACE uOttawa</a></li>
                <li><a>Business Healthcare Society</a></li>
                <li><a>Finance Society</a></li>
                <li><a>Human Resources Association</a></li>
                <li><a>Telfer Management Competitions</a></li>
                <li><a>Business Technology Association</a></li>
                <li><a>Telfer International</a></li>
                <li><a>Telfer Law Society</a></li>
                <li><a>Enactus uOttawa</a></li>
                <li><a>Telfer Marketing Association</a></li>
                <li><a>The Entrepreneurs Club</a></li>
                <li><a>Women in Management Network</a></li>
            </ul>
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
