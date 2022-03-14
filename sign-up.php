<?php include('db.php')?>

<!DOCTYPE html>
<html Lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pachinko Game Store</title>
    <link rel="stylesheet" href="reset.css" />
    <link rel="stylesheet" href="sign-up.css" />
    <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <header>
    </header>

    <form action="signupcheck.php" style="border: 1px solid #ccc;  padding: 20px;" method="post">

    <div class="container">
        <?php  if(isset($_GET['error'])){?>
			<p class = "error" style="  background:#F2DEDE;color:#A94442;padding:30px;width: 95%;border-radius: 5px;margin: auto;">
			<?php echo $_GET['error'];?></p>
		<?php }?>	

        <?php  if(isset($_GET['success'])){?>
			<p class = "success" style="  background:#D4EDDA;color:#40754C;padding:30px;width: 95%;border-radius: 5px;margin: auto;">
			<?php echo $_GET['success'];?></p>
		<?php }?>	

            <h1>Sign up</h1>
            <p>Fill in this form to create an account</p>

            <hr>
            <label for="uname"><b>UserName</b></label>
            <input type="text" placeholder="Enter Username" name="uname_signup" >

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw_signup" >

            <label for="psw_repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Retype Password" name="RepeatPsw" >


            <div class="cancel-Or-Signup">
                <button type="button" class="CButton" onclick="document.location ='Login.php'"> Cancel </button>
                <button type="submit" name = "register" class="SButton"> Register </button>
            </div>
        </div>
	</form>
</body>

</html>