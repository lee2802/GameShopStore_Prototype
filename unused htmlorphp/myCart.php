<!DOCTYPE html>

<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>My Cart</title>

   <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">
   <link href="myCart.css" rel="stylesheet">

</head>

<body>

<header>
   
  </header>

    <ul class = "topborder">
        <li class = "leftsideli "><a href="mainpagewithlogin.php" >Main Page</a></li>
        <li class = "leftsideli"><a href = "Profile.php"> My Account</a></li>
        <li class = "rightsideli"><a href="Login.php">Sign Out</a></li>
    </ul>
   


<div class="products-container">

   <div class="product-header">
      <h5 class="product-title">PRODUCT</h5>
      <h5 class="product-price">PRICE</h5>
      <h5 class="product-quantity">QUANTITY</h5>
      <h5 class="product-total">TOTAL</h5>
   </div>
   <div class="products">
   </div>

</div>  <!-- end container -->
<script src="mainpage.js"></script>

<div class="buyBtn">
   <button class="buybutton" type="submit" onclick="document.location ='mainpagewithlogin.php'"><a>Checkout</a></button>
</div>


<footer>
   <div class="container">
      <div class="row">
         <div class="col-md-3">
            <h4><span class="glyphicon glyphicon-info-sign"></span> About Us</h4>
            <p>Pachinko is a gaming store which was found with a vision of "Everyone can play". We sell more than games, we also sell computer accessories too!</p>
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

  </body>
</html>
