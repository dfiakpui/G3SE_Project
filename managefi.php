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
				    <div class="menuitem" style = "background-color: ffffff">
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
    </head>
    <body>
        <table id= "tableBody" width="100%">
            <tr>
                <td colspan="2" id="pageheader">
                    Course Resository
                </td>
            </tr>
            <tr>
                </tr>
                </table> -->
<?php
 
    include("assistant.php");
 
    echo"<a href='assistantadd.php'>Add an assistant<br></a><br>";
 
    echo"<table border>";
 
    echo"<tr><th><b>Assistant name</b></th><th><b>Course</b></th>
        <th><b>Email</b></th><th><b>department</b></th></tr><br>";
    $obj = new assistant();
    $row=$obj->display_assistant();
 
    $i=0;
    while($row){
       
        if($i%2==0){
            echo"<tr><td>{$row['assistant_name']}</td>
                <td>{$row['course_name']}</td>
                <td>{$row['assistant_email']}</td>
                <td>{$row['department_name']}</td>
                <td><a href='assistantupdate.php?id={$row['assistant_id']}'/>update</td>
                <td><a href='assistantdelete.php?id={$row['assistant_id']}'/>delete</td></tr>";
        }
        else{
            echo"<tr><td>{$row['assistant_name']}</td>
                <td>{$row['course_name']}</td>
                <td>{$row['assistant_email']}</td>
                <td>{$row['department_name']}</td>
                <td><a href='assistantupdate.php?id={$row['assistant_id']}'/>update</td>
                <td><a href='assistantdelete.php?id={$row['assistant_id']}'/>delete</td></tr>";
        }
        $i++;
        $row = $obj->fetch();
    }
     
    echo"</table>";
?>
</body>
</html>