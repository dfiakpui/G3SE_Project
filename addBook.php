<?php
	session_start();
	$username = $_SESSION['user'];
?>
<html>
	<head>
		<title>Add Book</title>
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
					<a href='displayassess.php' >
					<div class="menuitem" >
                    Course Assessment
                    </div></a>
					<div class="menuitem" style = "background-color: ffffff; border-radius: 1000px;" ><a href='books2.php'  style = "color:red">
                    Course Books
                   </a> </div>
					 <a href='department1.php'><div class="menuitem">
                   Department
                    </div></a>
                     <a href='display.php'><div class="menuitem">
                   ClassRooms
                    </div></a>
                                   
                    <a href='viewlecturers.php'><div class="menuitem">
                    Lecturers
                    </div></a>

                    </td>
				<td id="content">
					<div id="divPageMenu">
						<span class="menuitem" ><a href="addBook.php">add</a></span>
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
	
		<form method="GET" action="addBook.php">
			Book Name: <input type="text" name="mn" size="30">
			Department ID: <?php
			include_once("adb.php");
			$obj1 = new adb();
			$str_query = "SELECT department_id,department_name FROM department";
			$obj1->query($str_query);
				$row = $obj1->fetch();
				echo "<select name='dptm_id'>";
				
				while ($row) {
					echo "<option value='{$row["department_id"]}' >{$row["department_name"]}</option>";
					$row = $obj1->fetch();
				}
				echo "</select>";
			?>
			<input type="submit" value="Add">
		</form>
		<?php
			if(isset($_REQUEST['mn'])){
				include_once("book.php");
				//create object of department 
				$obj = new book();
				$name=$_REQUEST['mn'];
				$id=$_REQUEST['dptm_id'];
				$obj->add_book($name,$id);
			}
			else{
				echo exit();
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