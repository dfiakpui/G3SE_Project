
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
					<div id="divContent"> -->
<html>
	<head>
		<title>Index</title>
		<link rel="stylesheet" href="css/style.css">
		<script>
			
		</script>
	</head>
	<body>
		
<?php

	Include_once("adb.php");
	class assistant extends adb{
		function assistant(){
		
		}
	
		function add_assistant($name,$email,$department,$course){
			$str_query= "Insert into assistant set assistant_name='$name',assistant_email='$email',department_name='$department',course_name='$course'";
			return $this->query($str_query);
		
		
		}
		
		function get_assistant($id){ 
			$str_query="Select * from assistant where assistant_id='$id'";
			if(!$this->query($str_query)){
					return false;
				}
                    return $this->fetch();
			
			}
		
		function delete_assistant($id){
			$str_query="Delete from assistant where assistant_id='$id'";
			if (!$this->query($str_query)){
				echo "error running query";
			}
		
		}
		
		function update_assistant($id,$assisName,$course,$email,$department){
			$str_query="update assistant set assistant_name='$assisName',course_name='$course',
				assistant_email='$email',department_name='$department' where assistant_id='$id' ";
			return $this->query($str_query);
		
		}
                function display_assistant(){
	                  $str_query="select * from assistant";
                          if(!$this->query($str_query)){
                              return false;
	}
                return $this->fetch();
	}
	}
?>	
</html>
