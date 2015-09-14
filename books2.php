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
						
						<span class="menuitem" ><a href="addBook.php">Add a Book</a></span>
						<form  action="#" method="GET">
							<input type="text" id="txtSearch" /><input type="submit" value="search"/>
						</form>	
					</div>
					<div id="divStatus" class="status">
						status message
					</div>
					<div id="divContent">
						Content space
						
						<table id="tableExample" class="reportTable" width="100%">
						<?php
							include_once("book.php");
							$obj = new book();

							$obj->display();
							echo "<div>";

							echo "<table id='tableExample' class='reportTable' width='100%'>";
							
							echo "<tr class='header'> <td><b>BOOK ID</b></td><td>
											<b> BOOK NAME</b></td> <td><b>DEPARTMENT ID</b></td></tr>";
							$count=0;
							while($row= $obj->fetch()){
							if($count%2==0){
								echo "<tr class='row1'> <td>{$row['book_id']}</td> <td>{$row['book_name']}</td> <td>{$row['department_id']}</td>
								
								<td><a href='bookUpdate.php?id={$row['book_id']}'/>update</td></tr>";
							}
							else{
								echo "<tr class='row2'> <td>{$row['book_id']}</td> <td>{$row['book_name']}</td> <td>{$row['department_id']}</td>
								<td><a href='bookUpdate.php?id={$row['book_id']}'/>update</td></tr>";
							}
								$count++;
								//$row= $obj->fetch();
							}

							echo "</table>";
							echo "</div>";
						?>
							
						
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>	