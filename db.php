<?php

    $con = mysqli_connect("localhost","root","", "onlinegamestoreacc");
    
    if(!$con){
        echo "Failed to connect to database: " .  mysqli_connect_error();
    }



?>