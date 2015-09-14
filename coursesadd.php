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
				    <div class="menuitem" style = "background-color: ffffff; border-radius: 1000px;">
                    <a href='viewcourse.php' style = "color:red">Courses</a>
                    </div>
					  <div class="menuitem">
                    <a href='assistantview.php'>Faculty Intern</a>
                    </div>
					 <div class="menuitem">
                    <a href='manageschedule.php'>Course Schedule</a>
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
                        <span class="menuitem"><a href= "coursesadd.php">Add a Course</a></span>
						<span class="menuitem"><a href= "managecourses.php">Manage Courses</a></span>
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
    </head>
    <body> -->
        <table id= "tableBody" width="100%">
           
            <tr>
                </tr>
                </table>
		<form method= "GET" action="coursesadd.php">
		Course Code :<input type="text" name="cc" size="30"></br>
		Course Name :<input type="text" name="mn" size="30"></br>
		Course description:<textarea name="dc" col="30" row="5"></textarea></br>
		Department:<input type="text" name="dm" size="30"></br>
		<input type= "submit" value="Add">
		</form>
		<?php
			if(isset($_REQUEST['mn'] )){
					
				include("courses.php");
				$obj=new courses();
				
			$name=$_REQUEST['mn'];
			$code=$_REQUEST['cc'];
			$description=$_REQUEST['dc'];
			$department=$_REQUEST['dm'];
			if(!$obj->add_course($code,$name,$department,$description)){
				echo "error adding ".mysql_error();
			}else{
				echo " adding $name";
			}
		
			echo"<a href='viewcourse.php'>Apply Changes</a>";
			
	   }
	?>
	</body>
</html>
			