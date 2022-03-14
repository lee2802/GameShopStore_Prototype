<?php
# This is for sign in checking
session_start();
include "db.php";
if(isset($_POST['uname']) && isset($_POST['psw'])){
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
    
    $uname = validate($_POST['uname']) ;


    $pass = validate($_POST['psw']);

    if(empty($uname)){
        header("Location: Login.php?error=Username is required");
        exit();
    }
    else if (empty($pass)){
        header("Location: Login.php?error=Password is required");
        exit();
    }
    else{
       $sql = "SELECT * FROM user WHERE Username = '$uname' AND Password = '$pass'";
        $result = mysqli_query($con, $sql);
        
        if(mysqli_num_rows($result) ===1 ){
            $row = mysqli_fetch_assoc($result);
            if($row['Username'] === $uname &&  $row['Password'] === $pass ){

                $_SESSION['Username'] = $row['Username'];
                $_SESSION['id'] = $row['ID'];
                $_SESSION['name'] = $row['Name'];
                $_SESSION['email'] = $row['Email'];
                

                header("Location:mainpagewithlogin.html");
                exit();
            }
            else{
                 header("Location: Login.php?error=Incorrect Username or Password.");
                exit();
            }
        }
        else{
            header("Location: Login.php?error=Incorrect Username or Password.");
            exit();
        }
    }

} 
else{
    header("Location: Login.php");
    exit();
}