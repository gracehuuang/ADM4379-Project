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
        <h1>Login</h1>
         <nav>
                <a href="#">Home</a>
                <a href="http://localhost/ADM-4379/General Forum.php">Forums</a>
                <a href="http://localhost/ADM-4379/index.html">Profile</a>
                <a href="#">Course Info</a>
                <a href="http://localhost/ADM-4379/login.html" class="active">Login</a>
            </nav>
    </header>

    <section id="edit-profile">
        <h2>Login</h2>
        <br>

        <?php

            if(@$_GET['Empty']==true){


        ?>

            <div><?php echo $_GET['Empty'] ?></div>               

        <?php
        
            }

        ?>

        <?php

            if(@$_GET['Invalid']==true){


        ?>

            <div><?php echo $_GET['Invalid'] ?></div>               

        <?php

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
    

</body>
</html>