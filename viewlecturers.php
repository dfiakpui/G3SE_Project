<?php
	session_start();
	$username = $_SESSION['user'];
?>
<html>
	<head>
		<title>View all lecturers</title>
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
					<div id="divContent1">
						<h3 style ="text-align:center">View Lecturers</h3>
						<?php
				include("lecturers.php");
				$obj = new lecturers();
				
				$row = $obj->get_lecturers();
				echo "<table id='tableExample' class='reportTable' width='100%'>";
				echo "<tr class='header'>
								<td>Lecturer Name</td>
								<td>Office Number</td>
								<td>Office Hours</td>
								<td>Email</td>
								<td>Phone Number</td>
								<td>Department ID</td>
							</tr>";
				$count = 0;
				$rownum;
				while($row){
					if ($count%2==0){
						$rownum = 'row1';
					}else{
						$rownum = 'row2';
					}
					
					echo "<tr class= '$rownum'><td>{$row['name']}</td><td>{$row['office_number']}</td>";
					echo "<td>{$row['office_hours']}</td><td>{$row['email']}</td><td>{$row['phone_number']}</td>";
					echo "<td>{$row['department_id']}</td><td><a href='editlecturers.php?id={$row['username']}'>edit</a></td></tr>";
					$row = $obj->fetch();
					$count++;
				}
				echo "</table>";
						
		?>
					</div>
	
	</body>
</html>	