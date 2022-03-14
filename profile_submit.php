<?php
# This is for profile update
session_start();
include "db.php";
if(isset($_POST['nameforprofile']) || isset($_POST['nameuserforprofile']) || isset($_POST['emailforprofile'])){
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $Username = $_SESSION['Username'];
    $IDnum =  $_SESSION['id'] ;
    $Name =  $_SESSION['name'] ;
    $mail = $_SESSION['email'] ; 

    
    $newName = validate($_POST['nameforprofile']);
    $newUsername = validate($_POST['nameuserforprofile']);
    $newmail = validate($_POST['emailforprofile']);

    


       $newsql = "UPDATE user SET Name = '$newName' , Username = '$newUsername' , Email = '$newmail' WHERE ID = '$IDnum'";
       $newresult =  mysqli_query($con,$newsql);
    
        if($newresult){
        $_SESSION['Username'] = $newUsername;
        $_SESSION['name'] = $newName ;
        $_SESSION['email'] = $newmail;
            
        header("Location:Profile.php");
        exit();

        }
        else{
            header("Location: Profile.php?error=error on updating profile.");
            exit();
        }
    

} 
else{
    header("Location: Profile.php?error");
    exit();
}