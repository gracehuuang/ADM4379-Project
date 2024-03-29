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

        <h1>ADM 4379</h1>

            <nav>
                <a href="#">Home</a>
                <a href="General Forum.php" class="active">Forums</a>
                <a href="profile.php">Profile</a>
                <a href="Course Search.php">Course Info</a>
                <a href="login.php">Login</a>
            </nav>
    </header>

    <section id="forum-content">
        <h2>Posts in ADM 4379</h2>
        <br>
        <forum-user>jacob.aristotle</forum-user>
        <post-content>is this course any good?</post-content>
        <br><br>
        <button id="message">Reply</button>
        <br>
        <forum-reply>gracehuang</forum-reply>
        <reply-content>it's the best course i've taken in my entire undergrad!</reply-content>
        <br><br>
        <button id="message">Reply</button>
        <br><br><br>
        <forum-user>shaykirk</forum-user>
        <post-content>This prof is amazing!!!!</post-content>
        <br><br>
        <button id="message">Reply</button>
        <br><br>
       
        <label for="postform">Start the conversation:</label>  
        <form id="postForm">
        <textarea name="message" id="message" cols="30" rows="5" placeholder="Type your message here..."></textarea>
        <button type="submit">Post</button>
    </form>
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
