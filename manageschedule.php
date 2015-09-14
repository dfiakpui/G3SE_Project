<?php
	session_start();
	$username = $_SESSION['user'];
?>
<html>
	<head>
		<title>Manage Course Schedule</title>
		<link rel="stylesheet" href="css/style.css">
		<script src="jquery-2.1.3.js"></script>
		<script>
			
			function sendRequest(u){
				// Send request to server
				//u a url as a string
				//async is type of request
				var obj=$.ajax({url:u,async:false});
				//Convert the JSON string to object
				var result=$.parseJSON(obj.responseText);
				return result;	//return object	
			}
			
			
			function deleteSched(id){
				var objResult=sendRequest("ajaxresponse.php?cmd=2&id="+id);

				document.location = 'manageschedule.php';
				return;
					
			}
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
				    <div class="menuitem">
                    <a href='viewcourse.php' >Courses</a>
                    </div>
					  <div class="menuitem"  >
                    <a href='assistantview.php'>Faculty Intern</a>
                    </div>
					 <div class="menuitem" style = "background-color: ffffff; border-radius: 1000px;">
                    <a href='manageschedule.php'  style = "color:red">Course Schedule</a>
                    </div>
					 <div class="menuitem">
                    <a href='displayassess.php'>Course Assessment</a>
                    </div>
					 <div class="menuitem">
                    <a href='books2.php'>Course Books</a>
                    </div>
					<div class="menuitem">
                    <a href='department1.php'>Department</a>
                    </div>
                    <div class="menuitem">
                    <a href='display.php'>ClassRooms</a>
                    </div>
                                   
                    <div class="menuitem">
                    <a href='viewlecturers.php'>Lecturers</a>
                    </div>

                    </td>
				<td id="content">
					<div id="divPageMenu">
					<form method="POST" action="search.php">
						<!--<span class="menuitem" >page menu 3</span>-->
						<input type="text" id="txtSearch" name = "txt" placeholder = "Search"/>
						<a href ="search.php"><input type="submit" value = "Search"></a>	
						</form>
					</div>
					<div id="divStatus" class="status">
						status message
					</div>
					<div id="divContent1">
						<h3 style ="text-align:center">Course Schedule</h3>
								<form method="POST" action="manageschedule.php">
			<input type="text" name="wk" size="30" placeholder = "Week"><br><br>
			<input type="text" name="dt" size="30" placeholder = "Date"><br><br>
			<input type="text" name="tp" size="30" placeholder = "Topic"><br><br>
			<input type="submit" value="Add">
			</form>
						<?php
				include("schedule.php");
				$obj = new schedule();
				
				if(isset($_REQUEST['wk'])){	
					$week=$_REQUEST['wk'];				
					$date=$_REQUEST['dt'];
					$topic = $_REQUEST['tp'];
				
				if(!$obj->add_schedule($week, $date,$topic)){
					echo "Error adding".mysql_error(); 
				}
				}
				
				$row = $obj->get_schedule();
				echo "<table id='tableExample' class='reportTable' width='100%'>";
				echo "<tr class='header'>
								<td>Week</td>
								<td>Date</td>
								<td>Topic</td>
							</tr>";
				$count = 0;
				$rownum;
				while($row){
					if ($count%2==0){
						$rownum = 'row1';
					}else{
						$rownum = 'row2';
					}
					
					echo "<tr class= '$rownum'><td>{$row['week']}</td><td>{$row['date']}</td>";
					echo "<td>{$row['topic']}</td>";
					echo "<td onclick= 'deleteSched({$row['schedule_id']})'>delete</td>";
					echo "<td><a href='editschedule.php?id={$row['schedule_id']}'>edit</a></td></tr>";
					$row = $obj->fetch();
					$count++;
				}
				echo "</table>";
						
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