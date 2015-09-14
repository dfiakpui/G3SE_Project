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
				<td id="mainnav">
					<div class="menuitem">
					<a href='display.php?id={$row['ID']}'/>ClassRooms
					</div>
					<div class="menuitem">
					<a href='displayassess.php?id={$row['ID']}'/>Assessment
					</div>
					<div class="menuitem">
					<a href='assistantview.php?id={$row['ID']}'/>Assistant Lecturer
					</div>
					<div class="menuitem">
                    <a href='viewcourse.php?id={$row['ID']}'/>Courses
                    </div>
                    <div class="menuitem">
                    <a href='viewlecturers.php?id={$row['ID']}'/>Lecturers
                    </div>
					<!-- <div class="menuitem">menu 3</div>
					<div class="menuitem">menu 4</div> -->
				</td>
				<td id="content">
					<div id="divPageMenu">
						<span class="menuitem" >page menu 1</span>
						<span class="menuitem" >page menu 2</span>
						<span class="menuitem" >page menu 3</span>
						<input type="text" id="txtSearch" placeholder = "Search"/>
						<span class="menuitem">search</span>		
					</div>
					<div id="divStatus" class="status">
						status message
					</div>
					<div id="divContent">
<!-- <html>
	<head>
		<form action="display.php" method="GET">
			Search Text : <input type="text" size="30" name="st">
					<input type="submit" value="search">
	</form>
	<link rel="stylesheet" href="css/style.css"> -->
<?php

	include("classroom.php");

	echo"<br>";

	echo"<a href='addclassroom.php'>Add Classroom<br></a>";

	echo"<table id= tableExample class=reportTable width=100%>";

	echo"<tr class=header>
		<th><b>ID</b></th>
		<th><b>Hall_Number</b></th>
		<th><b>Location</b></th></tr><br>";

		$obj = new classrooms();
		$row=$obj->view_all();

		$i=0;
		while($row){
			if($i%2==0){
			echo"<tr class=row1>
				<td>{$row['ID']}</td>
				<td>{$row['Hall_No']}</td>
				<td>{$row['Location']}</td>
				<td><a href='updateclassroom.php?id={$row['ID']}'/>update</td>
				<td><a href='deleteclassroom.php?id={$row['ID']}'/>delete</td></tr>";
			}
			else{
			echo"<tr class=row2>
				<td>{$row['ID']}</td>
				<td>{$row['Hall_No']}</td>
				<td>{$row['Location']}</td>
				<td><a href='updateclassroom.php?id={$row['ID']}'/>update</td>
				<td><a href='deleteclassroom.php?id={$row['ID']}'/>delete</td></tr>";
			}

		$i++;
		$row = $obj->fetch();
		}
	
	echo"</table><br><br>";

	echo"<a href='index.php'>Go Home<br></a>";
?>
</head>
</html>
