<?php
 
 $con= mysqli_connect('localhost', 'root', '', 'course_search');

    if(!$con){

        die('Please Check Your Connection' .mysqli_error($con));
    }

?>
