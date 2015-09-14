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
				<td id="mainnav">
					<a href ="index.php"><div class="menuitem">Manage Lecturers</div></a>
					<a href ="manageschedule.php"><div class="menuitem">Manage Course Schedule</div></a>
				</td>
				<td id="content">
					<div id="divPageMenu">
					<form method="GET" action="search.php">
						<a href ="index.php"><span class="menuitem" >Add Lecturer</span></a>
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
						if(isset($_REQUEST['txt'])){
				include("lecturers.php");
				$obj = new lecturers();
				
				$row = $obj->get_lecturerbyname($_REQUEST['txt']);
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
					echo "<td>{$row['department_id']}</td><td><a href='editlecturers.php?id={$row['lecturer_id']}'>edit</a></td></tr>";
					$row = $obj->fetch();
					$count++;
				}
				echo "</table>";
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