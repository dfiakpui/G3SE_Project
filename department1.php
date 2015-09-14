<?php
	session_start();
	$username = $_SESSION['user'];
?>

<html>
	<head>
		<title>Index</title>
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
				   <div class="menuitem" > <a href='viewcourse.php' >
                    Courses
                   </a> </div>
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
					 <div class="menuitem" style = "background-color: ffffff; border-radius: 1000px;"><a href='department1.php'   style = "color:red">
                   Department</a>
                    </div>
                     <a href='display.php'><div class="menuitem">
                   ClassRooms
                    </div></a>
                                   
                    <a href='viewlecturers.php'><div class="menuitem">
                    Lecturers
                    </div></a>

                    </td>
				<td id="content">
					<div id="divPageMenu">
						
						<span class="menuitem" ><a href="adddepartment.php">add</a></span>
						
						<input type="text" id="txtSearch" placeholder = "Search"/>
						<span class="menuitem">search</span>		
					</div>
					<div id="divStatus" class="status">
						status message
					</div>
					<div id="divContent">
						Content space
						<a href='addclassroom.php?id={$row['ID']}'/>add classroom <br>
						<span class="clickspot">click here </span>
						
						
						<span class="clickspot">click here </span>
								<?php
									include_once("department.php");
									$obj = new department();
									//connect to the database and open

										$obj->display_departments(); 
										// displaying the database content in a table
										
										echo "<table id='tableExample' class='reportTable' width='100%'>";
										echo "<tr> <td><b> DEPARTMENT ID</b></td> <td>;
											<b>DEPARTMENT NAME</b></td> </tr>";
											$count = 0;
										while($row =$obj->fetch()){
											if($count%2==0){
												echo "<tr class='row1'><td>{$row['department_id']}</td> <td>{$row['department_name']}</td> <td>
											 <a href='delete_department.php?id={$row['department_id']}'>DELETE</td><td><a href='edit_department.php?id={$row['department_id']}'>
											Edit </td></tr>";
											}
											
											else{
												echo "<tr class=''row2> <td>{$row['department_id']}</td> <td>{$row['department_name']}</td> <td>
											 <a href='delete_department.php?id={$row['department_id']}'>DELETE</td><td><a href='edit_department.php?id={$row['department_id']}'>
											Edit </td> </tr>";
											}
										
											$count++;
											}
									//clicking tp autofill a form to update iterator_apply
										echo "</table";
										
								
								?>
							
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>	