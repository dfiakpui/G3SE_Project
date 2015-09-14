<html>
	<head>
		<title>AddDepartment</title>
		<link rel="stylesheet" href="css/style.css">
		<script>
			
		</script>
	</head>
	<body>
	<table>
			<tr>
				<td colspan="2" id="pageheader">
					Application Header
				</td>
			</tr>
			<tr>
			<!--main navigation-->
				<td id="mainnav">					
					<div class="menuitem"><a href="department.html">DEPARTMENT</a></div>
					<div class="menuitem"><a href="books.html">BOOKS</a></div>
					<div class="menuitem"></div>
					<div class="menuitem">menu 4</div>
				</td>
				<td id="content">
					<div id="divPageMenu">
						<span class="menuitem"><a href="displayDepartment.php">View</a></span>
						<span class="menuitem" ><a href="adddepartment.php">add</a></span> 
	
					</div>
					<div id="divStatus" class="status">
						status message
					</div>
					<div id="divContent">
						Content space
						<span class="clickspot">click here </span>
	
	
		<form method="GET" action="adddepartment.php">
			Department Name <input type="text" name="mn" size="30">
			<input type="submit" value="Add">
		</form>
		<?php
			if(isset($_REQUEST['mn'])){
				include_once("department.php");
				//create object of department 
				$obj = new department();
				$name=$_REQUEST['mn'];
				$obj->add_department($name);
				
				
			}			
		?>
		
			</td>
			</tr>
		</table>
		<div id="divDesc" style="display:none;position:absolute;top:0;left:0">
			this a div
		</div>
	</body>
</html>	
