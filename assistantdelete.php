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
        <title>Index</title>
        <link rel="stylesheet" href="css/style.css">
        <script>
            
        </script>
    </head> -->
    <body>
        <table id= "tableBody" width="100%">
            <tr>
                <td colspan="2" id="pageheader">
                    Course Resository
                </td>
            </tr>
            <tr>
            </tr>
        </table>
    <?php
       
        if(isset($_REQUEST['id'])){
            $id=$_REQUEST['id'];
          
            include_once("assistant.php");
            $obj=new assistant();
            $result=$obj->get_assistant($id);

            include_once("assistant.php");
            $obj=new assistant();

 
            if(!$result){
                echo"Error deleting".mysql_error();
            }else{
                echo"Successfully deleted";
                Header("Location:assistantview.php");
            }            
        }
    ?>
  
    </body>
</html>