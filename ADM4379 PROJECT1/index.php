<!DOCTYPE html>


<?php
    session_start();
    
    if(isset($_SESSION['User'])){

        echo 'Welcome ' . $_SESSION['User'] . '<br/>';
        echo '<a href="logout.php?logout">Logout</a>';

    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <h1>User Profile</h1>
         <nav>
                <a href="#">Home</a>
                <a href="General Forum.php">Forums</a>
                <a href="index.php" class="active">Profile</a>
                <a href="#">Course Info</a>
                <a href="login.php">Login</a>
            </nav>
    </header>

    <section id="edit-profile">
        <h2>Profile</h2>
        <form action="#" method="post">
            <label for="profile-pic">Profile Picture:</label>
            <input type="file" id="profile-pic" name="profilePic" accept="image/*">
            
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="program">Program:</label>
            <input type="text" id="program" name="program" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="yearOfStudy">Year of study:</label>
            <select id="yearOfStudy" name="yearOfStudy" required>
                <option value="" disabled selected>Select Year</option>
                <option value="first">First Year</option>
                <option value="second">Second Year</option>
                <option value="third">Third Year</option>
                <option value="fourth">Fourth Year</option>
            </select>

            <h2>Student GPA:</h2>
            <label for="gpa">Enter your GPA:</label>
            <input type="number" id="gpa" name="gpa" min="0" max="10" step="0.01" required>

            <h2>Bio:</h2>
            <label for="bio">Add your awards, qualifications, and experiences:</label>
            <textarea id="bio" name="bio" rows="4"></textarea>
        </form>
        <br>
        <button type="submit">Save Changes</button>
    </section>

</body>
</html>

