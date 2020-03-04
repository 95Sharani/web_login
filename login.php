
<?php

if (isset($_POST['submit'])) {
	$user=$_POST['username'];
	$pass=$_POST['password'];

	if($user=="admin" && $pass=="admin"){
		header("location: homee.php");
	}
	else{
		echo ("access denied");
	}
}

?>

<html>
<head>
	<title>Login</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="main-title">
		<h1>ShanCABs</h1> 
	</div>
	<div class ="loginbox">
	<img src = "image/7.jpg" class ="key">
	<h2>Log in here</h2>
	<form method="post" action="">
		<p>User Name</p>
		<input type="text" name="username" placeholder= "Enter Username">
		<p>Password</p>
		<input type="password" name="password" placeholder= "Enter Password"><br><br>
		<input type="submit" name="submit" value="login">

	</form>
</div>
	<footer class="main-footer">
		<p>Copyright &copy 2019</p>
	</footer>

</body>
	
	

</html>
