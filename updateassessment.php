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
		<body> -->
		<table id= "tableBody" width="100%">
			<tr>
				<td colspan="2" id="pageheader">
					Update Assessment
				</td>
			</tr>
		</table>

			<?php
				if(isset($_REQUEST['id'])){
					$id=$_REQUEST['id'];
					include_once("assessment.php");
					$obj=new assessment();
					$result=$obj->get_assessment($id);
				}

			?>
				<form action="updateassessment.php" method="POST">
						<div> Assessment Id:<input type="text" name="id" size="30" value="<?php echo $result['Assess_id']?>"/>
						</div><br>
						<div> Course Id:<input type="text" name="c" size="30" value="<?php echo $result['Course_id']?>"/>
						</div><br>
						<div> Weight:<input type="text" name="w" size="30" value="<?php echo $result['Weight']?>"/>
						</div><br>
						<div> Description:</div>
						<div>
							<textarea name="d" cols="30" rows="10"><?php echo $result['Description']?>
							</textarea><br><br>
						</div>
						<input type="submit" value="Update">
				</form>

				<?php
				if(isset($_POST['id'])){
					include_once("assessment.php");
					$obj=new assessment();
					$id=$_REQUEST['id'];
					$cid=$_REQUEST['c'];
					$weight=$_REQUEST['w'];
					$desc=$_REQUEST['d'];

					if(!$obj->update_assessment($id,$cid,$weight,$desc)){
						echo"Error updating".mysql_error();
					}else{
						echo"Successfully updated<br><br>";
					}
					echo"<a href='displayassess.php'>Apply Changes</a><br>";
				}
				?>
		</body>
	</head>
</html>