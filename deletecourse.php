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
                    Course Resository
                </td>
            </tr>
            <tr>
            </tr>
        </table>
    <?php
       
        if(isset($_REQUEST['id'])){
            $id=$_REQUEST['id'];
          
            include_once("courses.php");
            $obj=new courses();
            $result=$obj->get_course($id);

            include_once("courses.php");
            $obj=new courses();

 
            if(!$obj->delete_course($id)){
                echo"Error deleting".mysql_error();
            }else{
                echo"Successfully deleted";
                Header("Location:managecourses.php");
            }            
        }
    ?>
  
    </body>
</html>