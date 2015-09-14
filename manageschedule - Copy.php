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

				if(objResult.result==1){
					var array = objResult.products;
					
					var length = array.length;
					var i;
					
					while($("#tableExample tr").length > 1){
						document.all.myTable.deleteRow(1);
					}
					
					for(i =0; i < length; i++){
						var table = document.getElementById("tableExample");
						var row = table.insertRow();
						var cell1 = row.insertCell(0);
						var cell2 = row.insertCell(1);
						var cell2 = row.insertCell(1);
						cell1.innerHTML = array[i].week;
						cell2.innerHTML = array[i].date;
						cell2.innerHTML = array[i].topic;
					}
					return;
				}	
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
						<h3 style ="text-align:center">Course Schedule</h3>
								<form method="GET" action="manageschedule.php">
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
								<td></td>
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
					echo "<td onclick= 'deleteSched({$row['schedule_id']})'>delete</td></tr>";
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