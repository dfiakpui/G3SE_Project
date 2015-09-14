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
	class courses extends adb{
		function courses(){
		
		} 
		
		function add_course($code,$name,$department,$description){
			$str_query="Insert into courses set course_id='$code',course_name='$name',course_department='$department',course_description='$description'";
			return $this->query($str_query);
	
		}
		
		function update_course($id,$CName,$CDepartment,$CDescription){
			$str_query="update courses set course_id='$id',course_name='$CName',course_department='$CDepartment',
					course_description='$CDescription' where course_id='$id'";
					return $this->query($str_query);
		}
		
		function get_course($id){ 
			$str_query="Select * from courses where course_id=$id";
			if(!$this->query($str_query)){
					return false;
				}
                    return $this->fetch();
			
			}

		function display_course(){
	                  $str_query="select * from courses";
                          if(!$this->query($str_query)){
                              return false;
                          }
                          return $this->fetch();
						  }
		function delete_course($id){
		      $str_query="delete from courses where course_id='$id'";
                      return $this->query($str_query);
                }
                
     }
?>
</html>