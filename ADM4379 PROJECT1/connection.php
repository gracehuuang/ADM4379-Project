<?php
    
    $con= mysqli_connect('localhost', 'root', '', 'mytelferlife');

    if(!$con){

        die('Please Check Your Connection' .mysqli_error($con));
    }

   
    ?>
