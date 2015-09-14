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
					<div class="menuitem" style = "background-color: ffffff; border-radius: 1000px;" >
					<a href='displayassess.php'  style = "color:red">
                    Course Assessment</a>
                    </div>
					<a href='books2.php'><div class="menuitem">
                    Course Books
                    </div></a>
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
						<span class="menuitem" ><a href='addassessment.php'>Add Assessment</a></span>
						<input type="text" id="txtSearch" placeholder = "Search"/>
						<span class="menuitem">search</span>		
					</div>
					<div id="divStatus" class="status">
						status message
					</div>
					<div id="divContent">
<!-- <html>
	<head>
		<link rel="stylesheet" href="css/style.css">
		<body> -->

		<form action="addassessment.php">
				<div> Course Id:<input type="text" name="c" size="30">
				</div><br>
				<div> Weight:<input type="text" name="w" size="30">
				</div><br>
				<div> Description:</div>
					<textarea name='d' cols="30" rows="5"></textarea>
				<br>
				<input type="submit" value="Add">
			</form>

			<?php
				if(isset($_REQUEST['c'])){
					include_once("adb.php");
					include("assessment.php");
					$obj=new assessment();

					$cid=$_REQUEST['c'];
					$weight=$_REQUEST['w'];
					$desc=$_REQUEST['d'];

					$result=$obj->add_assessment($cid,$weight,$desc);

					if(!$result){
						echo"Error Adding".mysql_error();
					}else{
						echo"Added Successfully<br><br>";
					}
					echo"<a href='displayassess.php'>Apply Changes</a><br>";
				}
			?>
		<!-- <form action="addassessment.php">
				<div> Course Id:<input type="text" name="c" size="30">
				</div><br>
				<div> Weight:<input type="text" name="w" size="30">
				</div><br>
				<div> Description:</div>
					<textarea name='d' cols="30" rows="5"></textarea>
				<br>
				<input type="submit" value="Add">
			</form> -->
		</body>
	</head>
</html>
