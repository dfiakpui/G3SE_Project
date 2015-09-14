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
                    Update Assistant
                </td>
            </tr>
        </table>
                
    <?php
        if(isset($_REQUEST['id'])){
            $id=$_REQUEST['id'];
            include_once("assistant.php");
            $obj=new assistant();
            $result=$obj->get_assistant($id);
        }
 
        if(isset($_POST['id'])){
            include_once("assistant.php");
            $obj=new assistant();
            $id=$_REQUEST['id'];
            $assisName=$_REQUEST['mn'];
            $course=$_REQUEST['ci'];
            $email=$_REQUEST['ee'];
            $department=$_REQUEST['dp'];
 
            if(!$obj->update_assistant($id,$assisName,$course,$email,$department)){
                echo"Error updating".mysql_error();
            }else{
                echo"Successfully updated<br><br>";
            }
          echo"<a href='assistantview.php'>Apply Changes</a>";
        }
    ?>
    <form action="assistantupdate.php" method="POST">
            <div> Assistant Id:<input type="text" name="id" size="30" value="<?php echo $result['assistant_id']?>"/>
            </div><br>
            <div> Assistant name:<input type="text" name="mn" size="30" value="<?php echo $result['assistant_name']?>"/>
            </div><br>
            <div> Course mane:<input type="text" name="ci" size="30" value="<?php echo $result['course_name']?>"/>
            </div><br>
            <div> Department name:<input type="text" name="dp" size="30" value="<?php echo $result['department_name']?>"/>
            </div><br>
            <div> Email:<input type="text" name="ee" size="30" value="<?php echo $result['assistant_email']?>"/>
            </div>
            <input type="submit" value="Update">
    </form>
    </body>
    </head>
</html>