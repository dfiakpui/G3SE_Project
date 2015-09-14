<?php
	session_start();
	$username = $_SESSION['user'];
?>
<html>
	<head>
		<title>Edit Lecturer</title>
		<link rel="stylesheet" href="css/style.css">
		<script>
			
		</script>
	</head>
	<body>
		<table id= "tableBody" width="100%">
			<tr>
				<td colspan="2" id="pageheader">
					Course Repository
				</td>
			</tr>
				<tr>
                <td id = "pageheaderI"><?php echo "Welcome $username";?></td>
				
				<td id = "pageheaderI"><a href = "logout.php">Logout</a></td>
            </tr>
			<tr>
				<td id="mainnav">
				    <a href='viewcourse.php' ><div class="menuitem">
                    Courses
                   </div></a> 
					<a href='assistantview.php'>  <div class="menuitem"  >
                    Faculty Intern
                    </div></a>
					 <a href='manageschedule.php' ><div class="menuitem">
                    Course Schedule
                    </div></a>
				
					<a href='displayassess.php'><div class="menuitem"  >
                    Course Assessment
                    </div></a>
					<a href='books2.php'><div class="menuitem">
                    Course Books
                    </div></a>
					 <a href='department1.php'><div class="menuitem">
                   Department
                    </div></a>
                     <a href='display.php'><div class="menuitem">
                   ClassRooms
                    </div></a>
                                   
                   <div class="menuitem"  style = "background-color: ffffff; border-radius: 1000px;">
				    <a href='viewlecturers.php'   style = "color:red">
                    Lecturers
					</a>
                    </div>

                    </td>
				<td id="content">
					<div id="divPageMenu">
					<form method="GET" action="search.php">
						<a href ="viewlecturers.php"><span class="menuitem" >View Lecturers</span></a>
						<!--<span class="menuitem" >page menu 3</span>-->
						<input type="text" id="txtSearch" name = "txt" placeholder = "Search"/>
						<a href ="search.php"><input type="submit" value = "Search"></a>	
						</form>
					</div>
					<div id="divStatus" class="status">
						status message
					</div>
					<div id="divContent">
						<h3>Edit Lecturer</h3>
						<?php
						$id = $_REQUEST["id"];
						include("lecturers.php");
						$obj = new lecturers();
						$row = $obj->get_lecturerbyid($id);
						
						echo "<form method='POST' action='editlecturers.php'>
			<input type='text' name='ln' size='30' placeholder = 'Lecturer Name' value ={$row['name']}><br><br>
			<input type='text' name='on' size='30' placeholder = 'Office Number' value ={$row['office_number']}><br><br>
			<input type='text' name='oh' size='30' placeholder = 'Office Hours' value ={$row['office_hours']}><br><br>
			<input type='text' name='em' size='30' placeholder = 'Email Address' value ={$row['email']}><br><br>
			<input type='text' name='ph' size='30' placeholder = 'Mobile Phone' value ={$row['phone_number']}><br><br>
			<input type='text' name='dp' size='30' placeholder = 'Department ID' value ={$row['department_id']}><br><br>
			<input type='hidden' name='id' value='$id'>
			<input type='submit' value='Update'>
		</form>";
			if(isset($_REQUEST['ln'])){
				
				$name=$_REQUEST['ln'];
				$office = $_REQUEST['on'];
				$hours = $_REQUEST['oh'];
				$email = $_REQUEST['em'];
				$phone = $_REQUEST['ph'];
				$dept_id = $_REQUEST['dp'];
				
				if(!$obj->update_lecturer($id, $name, $office, $hours, $email, $phone, $dept_id)){
					echo "Error adding".mysql_error(); 
				}else{
					echo "Updated $name successfully";
				}
				
			}			
		?>
					</div>
		
						<!--<span class="clickspot">click here </span>
						<table id="tableExample" class="reportTable" width="100%">
							<tr class="header">
								<td>column1</td>
								<td>column2</td>
								<td>column3</td>
								<td>column4</td>
							</tr>
							<tr class="row1">
								<td>data example</td>
								<td>123</td>
								<td>01/01/2014</td>
								<td>data</td>
							</tr>
							<tr class="row2">
								<td>data example</td>
								<td>123</td>
								<td>01/01/2014</td>
								<td>data</td>
							</tr>
					</div>
				</td>
			</tr>
		</table>-->
	</body>
</html>	