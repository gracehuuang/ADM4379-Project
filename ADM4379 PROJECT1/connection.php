<?php
    
    $con= mysqli_connect('localhost', 'root', '', 'mtl_db');

    if(!$con){

        die('Please Check Your Connection' .mysqli_error($con));
    }

   
    ?>
//other version don't know which one is better rn
<?php
$db_host = '127.0.0.1'; $db_user = 'root'; $db_db = 'MyTelferLife';
// MAMP
$db_password = 'root'; $db_port = '8889';
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_db, $db_port);
if ($mysqli->connect_error) {
echo 'Errno: '.$mysqli->connect_errno;
echo '<br>';
echo 'Error: '.$mysqli->connect_error;
exit();
}
echo 'Success: A proper connection to MySQL was made.';
echo '<br>';
echo 'Host information: '.$mysqli->host_info;
echo '<br>';
echo 'Protocol version: '.$mysqli->protocol_version;
$mysqli->close();
?>
