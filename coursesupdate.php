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
					<a href='display.php'>ClassRooms</a>
					</div>
					<div class="menuitem">
					<a href='displayassess.php'>Assessment</a>
					</div>
					<div class="menuitem">
					<a href='assistantview.php'>Assistant Lecturer</a>
					</div>
					<div class="menuitem">
                    <a href='viewcourse.php'>Courses</a>
                    </div>
                    <div class="menuitem">
                    <a href='viewlecturers.php'>Lecturers</a>
                    </div>
					<div class="menuitem">
                    <a href='books2.php'>Books</a>
                    </div>
					<div class="menuitem">
                    <a href='department1.php'>Department</a>
                    </div>

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
		<title>Index</title>
		<link rel="stylesheet" href="css/style.css">
		<script>
		
		</script>
	</head> -->
	<body>
		 <table id= "tableBody" width="100%">
            <tr>
                <td colspan="2" id="pageheader">
                    Update Course
                </td>
            </tr>
            <tr>
                </tr>
                </table>
		<?php
			if(isset($_REQUEST['id'] )){
				$id=$_REQUEST['id'];
				include_once("courses.php");
				$obj=new courses();
                $row=$obj->get_course($id);
            }

            if(isset($_POST['id'])){ 
			include_once("courses.php");
			$obj=new courses();
			$id=$_REQUEST['id'];	
			$CName=$_REQUEST['pn'];
			$CDepartment=$_REQUEST['dm'];
			$CDescription=$_REQUEST['dc'];
			

			if(!$obj->update_course($id,$CName,$CDepartment,$CDescription)){
				echo "error UPDATING".mysql_error();
			}else{
				echo " updating successfully";
			}	
			echo"<a href='viewcourse.php'>Apply Changes</a>";
	   }
	?>
	<form action ="coursesupdate.php" method= "POST">
 		<div> Course code :<input type="text" name= "id" value="<?php echo $row['course_id']?>"/></div>
		<div> Name :<input type="text" name= "pn" value="<?php echo $row['course_name']?>"/></div>
		<div> Department :<input type="text" name= "dm" value="<?php echo $row['course_department']?>"/>
		<div> Description :</div>
		<div >
		<textarea name="dc" cols="30" rows="5"><?php echo $row['course_description']?></textarea>
		</div>
		<div><input type="submit" value="update"></div>
	</form>
	</body>
</html>