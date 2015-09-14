<html>
	<head>
		<title>Manage Course Schedule</title>
		<!--<link rel="stylesheet" href="css/style.css">-->
		<script>

		</script>
	</head>
	<body>
		<form method="GET" action="lectureradd.php" onsubmit = "return validate()">
			Lecturer Name :<input type="text" name="ln" size="30"><br><br>
			Office Number :<input type="text" name="on" size="30"><br><br>
			Office Hours :<input type="text" name="oh" size="30"><br><br>
			Email Address :<input type="text" name="em" size="30"><br><br>
			Mobile Phone :<input type="text" name="ph" size="30"><br><br>
			Department ID :<input type="text" name="dp" size="30"><br><br>
			<input type="submit" value="Add">
		</form>
		<?php
			if(isset($_REQUEST['ln'])){
				include("lecturers.php");
				$obj = new lecturers();
				
				$name=$_REQUEST['ln'];
				$office = $_REQUEST['on'];
				$hours = $_REQUEST['oh'];
				$email = $_REQUEST['em'];
				$phone = $_REQUEST['ph'];
				$dept_id = $_REQUEST['dp'];
				
				if(!$obj->add_lecturer($name, $office, $hours, $email, $phone, $dept_id)){
					echo "Error adding".mysql_error(); 
				}else{
					echo "Adding $name";
				}
				
			}			
		?>
	</body>
</html>	





