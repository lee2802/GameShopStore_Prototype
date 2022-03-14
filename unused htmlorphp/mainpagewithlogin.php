<?php
session_start();
?>
<!DOCTYPE html>

<html Lang = "en">
<head>
    <meta charset = "UTF-8" >
    <title>Pachinko Game Store</title>
    <link rel="stylesheet" href="reset.css" />
    <link rel="stylesheet" href="mainpage.css" />
    <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet"></head>

<body>

	<header>
	</header>
    <div class = "page-wrapper">
        <ul class = "topborder">
            <li class = "leftsideli active"><a href="mainpagewithlogin.php" >Main Page</a></li>
            <li class = "leftsideli"><a href = "Profile.php"> My Account</a></li>
            <li class = "rightsideli"><a href="logout.php">Sign Out</a></li>
        </ul>
    
        <div>
            <div class= "w3-content"> 
                <img class = "poster fade " src = "flash_sale.jpg">
                <img class = "poster fade " src = "summer_sale.jpg">
    
            </div>
    
            <div style="text-align: center;">
                <div class = "dot" onclick="currentslide(1)"></div>
                <div class = "dot" onclick="currentslide(2)"></div>
            </div>
        </div>
    
    
    
        <script>
            var slideCount = 1;
            showSlide(slideCount);
          
    
            function currentslide(n){
                showSlide(slideCount= n)
            }
          
            function showSlide(n){
                var i;
                var x = document.getElementsByClassName("poster");
                var y = document.getElementsByClassName("dot");
                if(n>x.length){slideCount = 1}
                if(n<1){
                    slideCount = x.length;
                }
                for(i=0;i<x.length;i++){
                    x[i].style.display = "none";
                }
                for(i=0;i< y.length;i++){
                    y[i].className = y[i].className.replace(" active", "");
                }
                x[slideCount-1].style.display = "block";
                y[slideCount-1].className += " active";
       
            }
    
    var slideIndex = 0;
    carousel();
    
    function carousel() {
      var i;
      var x = document.getElementsByClassName("poster");
      var y = document.getElementsByClassName("dot");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
      }
      for(i=0;i< y.length;i++){
        y[i].className = y[i].className.replace(" active", "");
        }
      slideIndex++;
      if (slideIndex > x.length) {slideIndex = 1} 
      x[slideIndex-1].style.display = "block"; 
      y[slideIndex-1].className += " active";
      setTimeout(carousel, 5000); 
    }
    
    </script>
    
    
    <!--Selling Item box (Selling Product) -->
    <a class = "title"><h1 style="text-align: center;">Top Selling</h1></a>
    
    <div class="mid">
    
    
    <div class = "itembox-row">

        <div class = "items">
          <img class = "itemphoto" src="shopping item/animalcrossing-switch.jpg" alt="image1">
          <h4>Animal-Crossing</h4>
          <p>RM140</p>
          <a class="buy-now" href="myCart.php">Buy Now</a>
        </div>
        <div class = "items">
            <img class = "itemphoto" src="shopping item/clubhouse51-nitendo.jpg" alt="image2">
            <h4>Clubhouse-51</h4>
            <p>RM135.00</p>
            <a class="buy-now" href="myCart.php">Buy Now</a>
          </div>

          <div class = "items">
            <img class = "itemphoto" src="shopping item/deathstranding.jpg" alt="image3">
            <h4>Death Stranding</h4>
            <p>RM120.00</p>
            <a class="buy-now" href="myCart.php">Buy Now</a>
          </div>
          <div class = "items">
            <img class = "itemphoto" src="shopping item/PS4-MEGA.jpg" alt="image4">
            <h4>PS4-Bundle</h4>
            <p>RM1300.00</p>
            <a class="buy-now" href="myCart.php">Buy Now</a>
          </div>
          <div class = "items">
            <img class = "itemphoto" src="shopping item/gamedrive.png" alt="image5">
            <h4>Game-Drive</h4>
            <p>RM129.00</p>
            <a class="buy-now" href="myCart.php">Buy Now</a>
          </div>
          <div class = "items">
            <img class = "itemphoto" src="shopping item/nitendoswitch.jpg" alt="image6">
            <h4>Nitendo Switch</h4>
            <p>RM1600.00</p>
            <a class="buy-now" href="myCart.php">Buy Now</a>
          </div>
          <div class = "items">
            <img class = "itemphoto" src="shopping item/nitendolite.jpg" alt="image7">
            <h4>Nitendo Switch Lite</h4>
            <p>RM900.00</p>
            <a class="buy-now" href="myCart.php">Buy Now</a>
          </div>
          <div class = "items">
            <img class = "itemphoto" src="shopping item/ringfitbundle.jpg" alt="image8">
            <h4>Ring-Fit-Bundle-Set</h4>
            <p>RM670.00</p>
            <a class="buy-now" href="myCart.php">Buy Now</a>
          </div>
          <div class = "items">
            <img class = "itemphoto" src="shopping item/zelda-nitendo.jpeg" alt="image9">
            <h4>Legend-of-Zelda</h4>
            <p>RM135.00</p>
            <a class="buy-now" href="myCart.php">Buy Now</a>
          </div>
    </div>
    
    
          </div>
          
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

             <script src="mainpage.js"></script>
  


</body>

</html>