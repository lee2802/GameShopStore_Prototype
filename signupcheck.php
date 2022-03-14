<?php
# This is for sign up checking
session_start();
include "db.php";

if (isset($_POST['uname_signup']) && isset($_POST['psw_signup']) && isset($_POST['RepeatPsw'])){


    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
    
        return $data;
    }
    
    $uname = validate($_POST['uname_signup']) ;
    $pass = validate($_POST['psw_signup']);
    $repass = validate($_POST['RepeatPsw']);

    $userdata = '&name='.$uname;

    echo $userdata;

    if(empty($uname)){
        header("Location: sign-up.php?error=Username is required$userdata");
        exit();
    }
    else if (empty($pass)){
        header("Location: sign-up.php?error=Password is required$userdata");
        exit();
    }
    else if(empty($repass)){
        header("Location: sign-up.php?error=Retype Password is required$userdata");
        exit();
    }
    else if($pass != $repass){
        header("Location: sign-up.php?error=Confirmation Password is not correct.$userdata");
        exit();
    }
    
    else{

  //check if username has been taken
      $sql = "SELECT * FROM user WHERE Username = '$uname'";
        $result = mysqli_query($con, $sql);
        
      
        if(mysqli_num_rows($result) >0 ){
            header("Location: sign-up.php?error=This name has been taken.$userdata");
            exit();
        }
        else{
            $sql2 = "INSERT INTO user(Username,Password) VALUES ('$uname','$pass')";
            $result2 = mysqli_query($con,$sql2);
            if($result2){
                header("Location: sign-up.php?error=Account Created Successfully! Please proceed to log in.$userdata");
                exit();
            }
            else{
                header("Location: sign-up.php?error=Unknown error occured.$userdata");
                exit();
            }
        }

    }
}

else{
    header("Location: sign-up.php?error");
    exit();
}