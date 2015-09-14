<html>
	<head>
		<title>Edit Schedule</title>
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
					<div id="divContent">
						<h3>Edit Schedule</h3>
						<?php
						$id = $_REQUEST["id"];
						include("schedule.php");
						$obj = new schedule();
						$row = $obj->get_schedule_by_id($id);
						
						echo "<form method='POST' action='editschedule.php'>
			<input type='text' name='we' size='30' placeholder = 'Week' value ={$row['week']}><br><br>
			<input type='text' name='da' size='30' placeholder = 'Date' value ={$row['date']}><br><br>
			<input type='text' name='to' size='30' placeholder = 'Topic' value ={$row['topic']}><br><br>
			<input type='hidden' name='id' value='$id'>
			<input type='submit' value='Update'>
		</form>";
			if(isset($_REQUEST['we'])){
				
				$date =$_REQUEST['da'];
				$topic = $_REQUEST['to'];
				$week = $_REQUEST['we'];
				
				if(!$obj->update_schedule($id, $week, $date, $topic)){
					echo "Error adding".mysql_error(); 
				}else{
					echo "Update successful";
				}
				
			}			
		?>
					</div>
	</body>
</html>	