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
			
 <?php
    include("courses.php");
 
    //echo"<a href='coursesadd.php'>Add a course<br></a><br>";
 
    echo"<table border>";
 
    echo"<tr><th><b>Course code</b></th><th><b>Course name</b></th>
        <th><b>Department</b></th><th><b>Description</b></th></tr><br>";
    $obj = new courses();
    $row=$obj->display_course();
 
    $i=0;
    while($row){
        if($i%2==0){
            echo"<tr><td>{$row['course_id']}</td>
                <td>{$row['course_name']}</td>
                <td>{$row['course_department']}</td>
                <td>{$row['course_description']}</td>
                <td><a href='coursesupdate.php?id={$row['course_id']}'/>update</td>
                <td><a href='deletecourse.php?id={$row['course_id']}'/>delete</td></tr>";
        }
        else{
            echo"<tr><td>{$row['course_id']}</td>
                <td>{$row['course_name']}</td>
                <td>{$row['course_department']}</td>
                <td>{$row['course_description']}</td>
                <td><a href='coursesupdate.php?id={$row['course_id']}'/>update</td>
                <td><a href='deletecourse.php?id={$row['course_id']}'/>delete</td></tr>";
        }
        $i++;
        $row = $obj->fetch();
    }
     
    echo"</table>";
?>
</html>