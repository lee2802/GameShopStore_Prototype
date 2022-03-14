<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head >
   <title>Profile</title>
   <link rel="stylesheet" href="reset.css" />
   <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">
   <link rel="stylesheet" href="profile.css" />

</head>

<header>
</header>

    
<body>

    <ul class = "topborder">
        <li class = "leftsideli "><a href="mainpagewithlogin.html" >Main Page</a></li>
        <li class = "leftsideli activefortop"><a href = "Profile.php"> My Account</a></li>
        <li class = "rightsideli"><a href="mainpagewithregister.php">Sign Out</a></li>
    </ul>

    <div class="container emp-profile">
     
            <div class="row1">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img style="margin-top:-80px;" src="avatar.png" alt="image"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
               

                </div>
            </div>

            <form method="post" action = "profile_submit.php">
            <?php  if(isset($_GET['error'])){?>
			<p class = "error" style="  background: #F2DEDE;color:#A94442;padding:10px;width: 95%;border-radius: 5px;margin: auto;">
			<?php echo $_GET['error'];}?></p>
                
            <div class="row2" style="padding-left: 40%;">
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>User Id</label>
                                        </div>
                                        <div class="col-md-6">
                                        <p name="idforprofile"><?php echo $_SESSION['id']?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Username</label>
                                        </div>
                                        <div class="col-md-6">
                                        <input type="text" placeholder="<?php echo $_SESSION['Username']?>" name="nameuserforprofile" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Name</label>
                                        </div>
                                        <div class="col-md-6">
                                        <input type="text" placeholder="<?php echo $_SESSION['name']?>" name="nameforprofile" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-6">
                                        <input type="text" placeholder="<?php echo $_SESSION['email']?>" name="emailforprofile" >

                                        </div>
                                    </div>


                                    

                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" class="profile-edit-btn" name="submit" 
            style="margin-left:25%; border:1px solid black ; padding:10px;"
            value="Edit Profile"/>
         </form>
           
    </div>



</body>

<footer>
    <div class="container">
       <div class="row">
          <div class="col-md-3">
             <h4><span class="glyphicon glyphicon-info-sign"></span> About Us</h4>
             <p>Pachinko is a gaming store which was found with a vision of

                "Everyone can play". We sell more than games, we also sell computer accessories too!</p>
          </div>
          <div class="col-md-3">
             <h4><span class="glyphicon glyphicon-earphone"></span> Customer Service</h4>
             <ul class="nav nav-stacked">
               <li><a href="#">Delivery Information</a></li>
               <li><a href="#">Privacy Policy</a></li>
               <li><a href="#">Shipping</a></li>
               <li><a href="#">Terms and Conditions</a></li>
             </ul>           
          </div>
          
          <div class="col-md-3">
             <h4><span class="glyphicon glyphicon-envelope"></span> Contact us</h4>
             

               <div class="form-group tight-form-group">
                 <label >Email:support@pachinko.com</label>
 
               </div> 
               <div class="form-group tight-form-group">
                 <label  >Contact Number: 03-8888-8888</label>
               </div>   

     
          </div>
          
       </div>
    </div>
    
    <div id="copyrightRow">
       <div class="container">
          <div class="row">
            <p class="text-muted">All images are copyright to their owners. This is just a hypothetical site
            <span class="pull-right">&copy; 2014 Copyright Pachinko Game Store</span></p>
          </div>
       </div>
    </div>
 </footer>
 
     <script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
     <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>
 
</html>