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
				   <div class="menuitem" style = "background-color: ffffff; border-radius: 1000px;"> <a href='viewcourse.php'   style = "color:red">
                    Courses
                   </a> </div>
					<a href='assistantview.php'>  <div class="menuitem"  >
                    Faculty Intern
                    </div></a>
					 <a href='manageschedule.php' ><div class="menuitem">
                    Course Schedule
                    </div></a>
				
					<a href='displayassess.php'><div class="menuitem"  >
                    Course Assessment
                    </div></a>
					<a href='books2.php'><div class="menuitem">
                    Course Books
                    </div></a>
					 <a href='department1.php'><div class="menuitem">
                   Department
                    </div></a>
                     <a href='display.php'><div class="menuitem">
                   ClassRooms
                    </div></a>
                                   
                    <a href='viewlecturers.php'><div class="menuitem">
                    Lecturers
                    </div></a>

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
			
 <?php
	$curcourse = "None Selected";
    include("courses.php");
 
    /*//echo"<a href='coursesadd.php'>Add a course<br></a><br>";
	echo "Current course selected: $curcourse <br><br>";
 
    echo"<select>";
	echo "<option value = '0'>Select a course to manage its outline
				</option>";
 
    $obj = new courses();
    $row=$obj->display_course();
 
    $i=0;
    while($row){

          echo"<option value = '{$row['course_id']}'>{$row['course_name']}
				</option>";
        
        $row = $obj->fetch();
    }
     
    echo"</select>";*/
	
?>
</html>