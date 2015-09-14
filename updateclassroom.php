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
	<link rel="stylesheet" href="css/style.css">
		<body>
		<table id= "tableBody" width="100%">
			<tr>
				<td colspan="2" id="pageheader">
					Update ClassRoom
				</td>
			</tr>
		</table>
		 -->
		<?php
			if(isset($_REQUEST['id'])){
			$id=$_REQUEST['id'];
			
			include_once("classroom.php");
			$obj=new classrooms();
			$result=$obj->get_classroom($id);
			}
				
			if(isset($_POST['id'])){
				include_once("classroom.php");
				$obj=new classrooms();
				$id=$_REQUEST['id'];
				$num=$_REQUEST['hn'];
				$loc=$_REQUEST['lo'];

				if(!$obj->update_classroom($id,$num,$loc)){
					echo"Error Updating".mysql_error();
				}else{
					echo"Updated Successfully<br><br>";
				}

				echo"<a href='display.php'>Apply Changes</a>";
			}

		?>
				<form action ="updateclassroom.php" method ="POST">
					<div> Lecture Hall ID:<input type="text" name="id" size"30" value="<?php echo $result['ID']?>"/>
					</div><br>
					<div> Lecture Hall Number:<input type="text" name="hn" size"30" value="<?php echo $result['Hall_No']?>"/>
					</div><br>
					<div> Lecture Hall Location:<input type="text" name="lo" size"30" value="<?php echo $result['Location']?>"/>
					</div><br>
					<input type="submit" value="Update">
				</form>
		</body>
	</head>
</html>