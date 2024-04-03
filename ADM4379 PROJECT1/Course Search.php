<?php
// calling to the database here include '';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Info</title>
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

        <h1>Course Info</h1>
         <nav>
                <a href="index.php">Home</a>
                <a href="General Forum.php">Forums</a>
                <a href="profile.php">Profile</a>
                <a href="Course Search.php" class= 'active'>Course Info</a>
                <a href="login.php">Login</a>
            </nav>
    </header>

    <section id="search-section">
        <div class="search-container">
            <h2>Here you can search for different courses offered by the Telfer School of Management.</h2>
            <form action="#" method="GET">
                <input type="text" name="search" placeholder="Search for a course...">
                <button type="submit">Search</button>
            </form>
        </div>
    </section>

    <table>
            <?php
if(isset($_GET['search'])){
    $search = $_GET['search'];

    // Prepare and execute the SQL query
    $sql = "SELECT * FROM Courses WHERE `Course Code`='$search' OR `Course Title`='$search' OR `Professor`='$search' OR `Term`='$search'";
    $result = mysqli_query($con, $sql);

    // Check if any rows are returned
    if($result && mysqli_num_rows($result) > 0){
        echo '<table>';
        echo '<thead>
            <tr>
                <th>Course Code</th>
                <th>Course Title</th>
                <th>Professor</th>
                <th>Term</th>
                <th>Course Description</th>
            </tr>
        </thead>';
        echo '<tbody>';
        // Loop through each row in the result set
        while($row = mysqli_fetch_assoc($result)){
            echo '<tr>
                <td>'.$row['Course Code'].'</td>
                <td>'.$row['Course Title'].'</td>
                <td>'.$row['Professor'].'</td>
                <td>'.$row['Term'].'</td>
                <td>'.$row['Course Description'].'</td>
            </tr>';
        }
        echo '</tbody>';
        echo '</table>';
    } else {
        echo '<h2>No results found</h2>';
    }
}
?>


</table>
</div>

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
