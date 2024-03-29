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
                <a href="index.php">Home</a>
                <a href="General Forum.php" class="active">Forums</a>
                <a href="profile.php">Profile</a>
                <a href="Course Search.php">Course Info</a>
                <a href="login.php">Login</a>
            </nav>
    </header>

    <section class="container">
        <h2>Posts in ADM 4379</h2>
        <br>
        <div class="post-box">
            <div class="post-user">Posted by: jacob.aristotle</div>
            <div class="post-title">Is this course any good?</div>
            <div class="post-content">Hey guys, I'm considering taking this coding course as an elective next semester. Can anyone share their experience with it? Thanks!
            </div>
            <div class="reply-box">
                <p class="reply-user">gracehuang replied:</p>
                <p class="reply-content">I took this course last semester. I think the content of the course is very beneficial to learn. The assignments were challenging but rewarding. I highly recommend it! </p>
            </div>
            <div class="reply-box">
                <p class="reply-user">shaykirk replied:</p>
                <p class="reply-content">This prof is amazing!!!! I'm currently enrolled in this course and I'm finding it really interesting. Definitely worth taking!</p>
            </div>
            <button class="reply-button">Reply</button>
            <form class="comment-form" style="display: none;">
                <textarea name="comment" placeholder="Type your comment here..."></textarea>
                <button type="submit">Post</button>
        </form>
        </div>


        <form id="postForm" class="post-form">
            <label for="postTitle">Title:</label>
            <input type="text" id="postTitle" name="postTitle" placeholder="Enter post title">
            <label for="message">Start the conversation:</label>
            <textarea name="message" id="message" cols="30" rows="5" placeholder="Type your message here..."></textarea>
            <button type="submit">Post</button>
        </form>
       
    </form>
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

    // Add click event listener to each reply button
    const replyButtons = document.querySelectorAll('.reply-button');
    replyButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Get the comment form associated with this button
            const commentForm = this.nextElementSibling;
            // Toggle the visibility of the comment form
            commentForm.style.display = commentForm.style.display === 'none' ? 'block' : 'none';
        });
    });

    // Add event listener for form submission
    const commentForms = document.querySelectorAll('.comment-form');
    commentForms.forEach(form => {
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            // Get the textarea value
            const commentInput = form.querySelector('textarea[name="comment"]');
            const commentText = commentInput.value;

            // Create new elements for the comment
            const replyBox = form.previousElementSibling;
            const newComment = document.createElement('div');
            newComment.classList.add('reply-box');
            newComment.innerHTML = `
                <p class="reply-user">You replied:</p>
                <p class="reply-content">${commentText}</p>
            `;

            // Insert the new comment before the reply button
            replyBox.parentNode.insertBefore(newComment, replyBox);

            // Reset the form
            commentInput.value = '';
            form.style.display = 'none';
        });
    });

    // Add event listener for posting a new conversation
    const postForm = document.getElementById('postForm');
    postForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        // Get the input values
        const postTitleInput = postForm.querySelector('input[name="postTitle"]');
        const postTitle = postTitleInput.value;
        const postMessageInput = postForm.querySelector('textarea[name="message"]');
        const postMessage = postMessageInput.value;

        // Create new post elements
        const postBox = document.createElement('div');
        postBox.classList.add('post-box');
        postBox.innerHTML = `
            <div class="post-user">Posted by: ${username}</div>
            <div class="post-title">${postTitle}</div>
            <div class="post-content">${postMessage}</div>
            <div class="reply-box">
                <button class="reply-button">Reply</button>
                <form class="comment-form" style="display: none;">
                    <textarea name="comment" placeholder="Type your comment here..."></textarea>
                    <button type="submit">Post</button>
                </form>
            </div>
        `;

        // Insert the new post at the top of the section
        const postsSection = document.querySelector('.container');
        postsSection.insertBefore(postBox, postsSection.firstChild);

        // Reset the form
        postTitleInput.value = '';
        postMessageInput.value = '';
    });
</script>


   
</body>
</html>
