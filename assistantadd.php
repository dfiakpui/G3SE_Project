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
					  <div class="menuitem"  style = "background-color: ffffff; border-radius: 1000px;">
                    <a href='assistantview.php' style = "color:red">Faculty Intern</a>
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
                        <span class="menuitem" ><a href='assistantadd.php'>Add an FI</a></span>
                        <input type="text" id="txtSearch" placeholder = "Search"/>
                        <span class="menuitem">search</span>        
                    </div>
					<div id="divStatus" class="status">
						status message
					</div>
					<div id="divContent">

	
		<form method= "GET" action="assistantadd.php">
		Assistant Name :<input type="text" name="mn" size="30"></br>
		Email:<input type="text" name="em" size="30"></br>
		Course:<input type="text" name="cc" size="30"></br>
		Department:<input type="text" name="dm" size="30"></br>
		<input type= "submit" value="Add">
		</form>
		<?php
			if(isset($_REQUEST['mn'] )){
					
				include("assistant.php");
				$obj=new assistant();
				
			$name=$_REQUEST['mn'];
			$email=$_REQUEST['em'];
			$course=$_REQUEST['cc'];
			$department=$_REQUEST['dm'];
			if(!$obj->add_assistant($name,$email,$department,$course)){
				echo "error adding ".mysql_error();
			}else{
				echo " adding $name";
			}
		
			
			echo"<a href='assistantview.php'>Apply Changes</a>";
	   }
	?>
	</body>
</html>