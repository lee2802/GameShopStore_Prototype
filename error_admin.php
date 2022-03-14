<?php
# This is for sign in checking
session_start();
include "db.php";
if(isset($_POST['adminuname']) && isset($_POST['adminpsw'])){
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
    
    $adminuname = validate($_POST['adminuname']) ;


    $adminpass = validate($_POST['adminpsw']);

    if(empty($adminuname)){
        header("Location: loginadmin.php?error=Username is required");
        exit();
    }
    else if (empty($adminpass)){
        header("Location: loginadmin.php?error=Password is required");
        exit();
    }
    else{
       $sql = "SELECT * FROM admin WHERE Username = '$adminuname' AND  Password = '$adminpass'";
        $result = mysqli_query($con, $sql);
        
        if(mysqli_num_rows($result) ===1 ){
            $row = mysqli_fetch_assoc($result);
            if($row['Username'] === $adminuname &&  $row['Password'] === $adminpass ){

                header("Location:adminmainpage.html");
                exit();
            }
            else{
                 header("Location: loginadmin.php?error=Incorrect Username or Password.");
                exit();
            }
        }
        else{
            header("Location: loginadmin.php?error=Incorrect Username or Password.");
            exit();
        }
    }

} 
else{
    header("Location: loginadmin.php");
    exit();
}