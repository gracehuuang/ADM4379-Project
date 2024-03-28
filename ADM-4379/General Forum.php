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
    <title>ADM 4379</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    

    <header>
        <h1>ADM 4379</h1>
            <nav>
                <a href="#">Home</a>
                <a href="http://localhost/ADM-4379/General Forum.html" class="active">Forums</a>
                <a href="http://localhost/ADM-4379/index.html">Profile</a>
                <a href="#">Course Info</a>
                <a href="http://localhost/ADM-4379/login.html">Login</a>
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
   <section>
      
   </section>
   
   <script>

    setTimeout(function() {
        document.getElementById('')
        
    }, timeout);

    </script>

</body>
</html>
