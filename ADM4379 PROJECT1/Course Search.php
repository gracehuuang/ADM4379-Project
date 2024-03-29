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
        <h1>Login</h1>
         <nav>
                <a href="#">Home</a>
                <a href="General Forum.php">Forums</a>
                <a href="index.php">Profile</a>
                <a href="Course Search.php" class= 'active'>Course Info</a>
                <a href="login.php">Login</a>
            </nav>
    </header>

    <div>
        <form method='post'>
            <input type='text' placeholder='search class name, code, professor, term'
            name='search'>
            
            <button name='submit'>Search</button>

</form>

<div>
    <table>
            <?php
if(isset($_POST['submit'])){
    $_search=$_POST['search'];
#IMPORTANT Need database, update line 42 with actual sql php code
    $sql='Select * from "database" where Course Code=`$search` or Course Title="$search" or Professor="$search" or Term="$search"';
    $result=mysqli_query($con,$sql);
    if($result){
        if(mysqli_num_rows($result)>0){
            echo '<thead>
            <tr>
            <th>Course Code</th>
            <th>Course Name</th>
            <th>Professor</th>
            <th>Term</th>
            </thead>';

            $row=mysqli_fetch_assoc($result);
            echo '<tbody>
            <tr>
                <td>'.$row['Course Code'].'</td>
                <td>'.$row['Course Title'].'</td>
                <td>'.$row['Professor'].'</td>
                <td>'.$row['Term'].'</td>
            </tr>
            </tbody>';
        }
        else{
            echo '<h2>Invalid Search</h2>';
        }
    }
}

?>


</table>
</div>


</body>
</html>
