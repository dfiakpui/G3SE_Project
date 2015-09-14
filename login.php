<?php
	session_start();
			include_once("lecturers.php");
		$obj = new lecturers();
	if(isset($_SESSION['user'])){
		header("Location: viewcourse.php");
	}
	else{
	
	if(isset($_REQUEST['username'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		$row = $obj->confirm_lecturer($username,$password);
		
		if($row == null){
			echo "<p id = 'error'>You do not have an account. <a href= 'signup.php'>Click here to create an account</p>";
			exit();
		}
		else {
			//set session variables
			$_SESSION["user"] = $username;
			header("Location: viewcourse.php");
		}
	}
	}
?>

<!Doctype html>
<html>
<head>
	<title>Log in</title>
	<!--<link rel="stylesheet" href="login.css">
	<link href = "bootstrap-3.2.0-dist\css\bootstrap.css" rel = "stylesheet">-->
</head>
<style>
	body{
		background-color: #ddd;
	}
</style>
<div>

</div>
<body>

<div id ="login">
<div class="container">
  <div style = 'margin-left: 5.8in; margin-top: 1in'>
		  <h2>Login</h2>
		
		  <form class="form-signup" action = "login.php" method = "POST">
			
			<input type="text" id="inputUserName" placeholder="Username" size = "30" name = "username" required autofocus><br> 
			
			<input type="password" id="inputPassword"  placeholder="Password" size = "30" name = "password" required>
			
			<div class="checkbox">
			  <label>
				<input type="checkbox" value="remember-me"> Remember me
			  </label>
			</div>
			<button type="submit">Log in</button>
			<br>
					</div>
			<p style = "font-size: 18px; text-align: center"><a href= 'signup.php'><b>New users should sign up here<b></p>
		  </form>



</div>
</body>
</html>

<?php

?>