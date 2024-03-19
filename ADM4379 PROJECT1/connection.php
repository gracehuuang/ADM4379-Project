<?php
    
    $con= mysqli_connect('localhost', 'root', '', 'mtl_db');

    if(!$con){

        die('Please Check Your Connection' .mysqli_error($con));
    }

   
    ?>