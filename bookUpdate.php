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

	<body>
		 <table id= "tableBody" width="100%">
            <tr>
                <td colspan="2" id="pageheader">
                    Update Book
                </td>
            </tr>
            <tr>
                </tr>
                </table>
		<?php
			if(isset($_REQUEST['id'] )){
				$id=$_REQUEST['id'];
				include_once("book.php");
				$obj=new book();
				$str_query="SELECT book_id, book_name FROM books where book_id=$id";
                $obj->query($str_query);
				$row = $obj->fetch();
			
           }
		   if(isset($_POST['id'])){
				include_once("book.php");
				$obj= new book();
				//$id = $_REQUEST['id'];	
				//$bkName =$_REQUEST['pn'];

				if(!$obj->update($id, $dpmt_id)){
					echo "error UPDATING".mysql_error();
				}else{
					echo " updating successfully";
				}	
				
				echo"<a href='books2.php'>Apply Changes</a>";
	   }
	

	?>
	<form action ="bookUpdate.php" method= "POST" >
 		<div> Book ID:<input type="text" name= "id" value="<?php echo $row['book_id'] ?>"></div>
		<div></div
		<div> Book Name :<input type="text" name= "pn" value="<?php echo $row['book_name']?>"></div>
		
		<div> Department ID: <?php
			include_once("adb.php");
			$obj1 = new adb();
			$str_query = "SELECT department_id,department_name FROM department";
			$obj1->query($str_query);
				$row = $obj1->fetch();
				echo "<select name='dptm_id'>";
				
				while ($row) {
					echo "<option value='{$row["department_id"]}' >{$row["department_name"]}</option>";
					$row = $obj1->fetch();
				}
				echo "</select>";
			?>
			</div>
		<div><input type="submit" value="update"></div>
	</form>
	</body>
</html>