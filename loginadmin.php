<?php include('db.php')?>

<!DOCTYPE html>
<html lang="en">
<head >
   <meta charset="utf-8">
   <title>Pachinko Game Store</title>
   <link rel="stylesheet" href="reset.css" />
   <link rel="stylesheet" href="Login.css" />
   <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">
</head>

<body>
	<header>
	
	</header>

	<form action=" error_admin.php" method="post">
	<?php  if(isset($_GET['error'])){?>
			<p class = "error" style="  background: #F2DEDE;color:#A94442;padding:10px;width: 95%;border-radius: 5px;margin: auto;">
			<?php echo $_GET['error'];?></p>
		<?php }?>
		<div class="container">
			<label for="name"><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="adminuname" >

			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="adminpsw" >

			<button type="submit">Login</button>
		</div>

	</form>

</body>

</html>