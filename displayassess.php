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
 -->
		<?php

			include("assessment.php");

			echo"<br>";

			echo"<table id= tableExample class=reportTable width=100%>";

			echo"<tr class=header>
				<th><b>Assess_id</b></th>
				<th><b>Course_id</b></th>
				<th><b>Weight</b></th>
				<th><b>Description</b></th></tr><br>";
			$obj = new assessment();
			$row=$obj->view_all();

			$i=0;
			while($row){
				if($i%2==0){
					echo"<tr class=row1>
						<td>{$row['Assess_id']}</td>
						<td>{$row['Course_id']}</td>
						<td>{$row['Weight']}</td>
						<td>{$row['Description']}</td>
						<td><a href='updateassessment.php?id={$row['Assess_id']}'/>update</td>
						<td><a href='deleteassessment.php?id={$row['Assess_id']}'/>delete</td></tr>";
				}
				else{
					echo"<tr class=row2>
						<td>{$row['Assess_id']}</td>
						<td>{$row['Course_id']}</td>
						<td>{$row['Weight']}</td>
						<td>{$row['Description']}</td>
						<td><a href='updateassessment.php?id={$row['Assess_id']}'/>update</td>
						<td><a href='deleteassessment.php?id={$row['Assess_id']}'/>delete</td></tr>";
				}
				$i++;
				$row = $obj->fetch();
			}
			
			echo"</table><br><br>";

			//echo"<a href='index.php'>Go Home<br></a>";
		?>
	</head>
</html>

