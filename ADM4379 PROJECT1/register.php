<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <h1>Sign Up for MyTelferLife</h1>
         <nav>
            <nav>
                <a href="#">Home</a>
                <a href="General Forum.php">Forums</a>
                <a href="index.php">Profile</a>
                <a href="#">Course Info</a>
                <a href="login
            </nav>
    </header>

    <section id="edit-profile">
        <h2>Personal Information</h2>
        <br>
        <form action="#" method="post">

            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" required>

            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="text" id="password" name="password" required>
        <br>
        <h2>Create Your Profile</h2>

            <label for="profile-pic">Profile Picture:</label>
            <input type="file" id="profile-pic" name="profilePic" accept="image/*">
            
            <label for="name">Display Name:</label>
            <input type="text" id="dispname" name="dispname" required>

            <label for="program">Program:</label>
            <input type="text" id="program" name="program" required>

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
            <button type="submit">Create Account</button>
        </form>
        <br>
    </section>

</body>
</html>
