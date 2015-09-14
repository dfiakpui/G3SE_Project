<html>
	<head>
	<title>EDIT</title>
	<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
	<table>
		<tr>
			<td colspan="2" id="pageheader">
				COURSE OUTLINE
			</td>
			
			</tr>
			<tr>
				<td id="mainnav">
					<div class="menuitem">
					<a href='display.php'>ClassRooms</a>
					</div>
					<div class="menuitem">
					<a href='displayassess.php'>Assessment</a>
					</div>
					<div class="menuitem">
					<a href='assistantview.php'>Assistant Lecturer</a>
					</div>
					<div class="menuitem">
                    <a href='viewcourse.php'>Courses</a>
                    </div>
                    <div class="menuitem">
                    <a href='viewlecturers.php'>Lecturers</a>
                    </div>
					<div class="menuitem">
                    <a href='books2.php'>Books</a>
                    </div>
					<div class="menuitem">
                    <a href='department1.php'>Department</a>
                    </div>
				</td>
				<td id="content">
					<div id="divPageMenu">
						<span class="menuitem" ><a href="displayDepartment.php">View</a></span>
						<span class="menuitem" ><a href="adddepartment.php">add</a></span> 		
						<form  action="#" method="GET">
							<input type="text" id="txtSearch" /><input type="submit" value="search">
						</form>
					</div>
					<div id="divStatus" class="status">
						status message
					</div>
					<div id="divContent">
						Content space
						<span class="clickspot">click here </span>			
				


							<?php
							if(isset($_REQUEST['id'] )){
								$id=$_REQUEST['id'];
								include_once("department.php");
								$obj=new department();
								$str_query="SELECT department_id, department_name FROM department where department_id=$id";
								$obj->query($str_query);
								$row = $obj->fetch();
			
							}
						   if(isset($_POST['id'])){
								include_once("department.php");
								$obj= new department();
								

								if(!$obj->updateDepartment($id, $dpName)){
									echo "error UPDATING".mysql_error();
								}else{
									echo " updating successfully";
								}	
								
								//echo"<a href='depa.php'>Apply Changes</a>";
					   }
	
					?>
							<form action="edit_department.php" Method="get">
								Department ID: <div><input type="text" name="id" value= "<?php echo $row['department_id']?>"> <br></div>
								Department Name:<div> <input type="text"name="nm" value="<?php echo $row['department_name']?>"><br></div>
								<input type="submit" name="Save" ><br>
							</form>

				</td>
			</tr>
		</table>
		<div id="divDesc" style="display:none;position:absolute;top:0;left:0">
			this a div
		</div>
	</body>
</html>	
