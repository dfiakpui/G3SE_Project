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
		$password2 = $_REQUEST['password2'];
		$name = $_REQUEST['name'];
		$office = $_REQUEST['offnum'];
		$hours = $_REQUEST['hours'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['num'];
		$dept_id = $_REQUEST['dept'];
		
		if (strcmp($password,$password2) == 0){		
			if(!$row = $obj->add_lecturer($name, $office, $hours, $email, $phone, $dept_id, $username, $password)){
				echo "error";
			}
			else {
				//set session variables
				$_SESSION["user"] = $username;
				header("Location: viewcourse.php");
			}
		}
		else{
			echo "the two passwords don't match";
		}
	}
	}
?>

<!Doctype html>
<html>
<head>
	<title>Sign up</title>
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
		  <h2>Sign up</h2>
		  <form class="form-signup" action = "signup.php" method = "POST">
			
			<input type="text" id="inputUserName" placeholder="Username" size = "30" name = "username" required autofocus> </br>
			
			<input type="password" id="inputPassword"  placeholder="Password" size = "30" name = "password" required></br>
			<input type="password" id="inputPassword"  placeholder="Confirm Password" size = "30" name = "password2" required></br>
			<input type="text" id="inputUserName" placeholder="Full Name" size = "30" name = "name" required></br> 
			<input type="text" id="inputUserName" placeholder="Office Hours" size = "30" name = "hours" required> </br>
			<input type="text" id="inputUserName" placeholder="Office Number" size = "30" name = "offnum" required> </br>
			<input type="email" id="inputUserName" placeholder="Email" size = "30" name = "email" required></br> 
			<input type="text" id="inputUserName" placeholder="Phone Number" size = "30" name = "num" required> </br>
			<input type="text" id="inputUserName" placeholder="Department Id" size = "30" name = "dept" required></br>
			
			<button type="submit">Sign up</button>
			</div>
			<br>
			<p style = "font-size: 18px; text-align: center"><a href= 'login.php'><b>Already have an account? Login here<b></p>
		  </form>

		</div>

</div>
</body>
</html>

<?php

?>