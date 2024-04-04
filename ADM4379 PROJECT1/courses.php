<?php
 
 $con= mysqli_connect('localhost', 'root', '', 'Courses');

    if(!$con){

        die('Please Check Your Connection' .mysqli_error($con));
    }

?>
