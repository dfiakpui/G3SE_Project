<?php
	include_once("adb.php");
	
	class courses extends adb{
		
		function courses(){
		
		} 

		/**
		* This returns all courses whose the variable $text in its name
		* @param $text the string to be searched for in the name
		* @return one row from the se_course table whose name field contains the value stored in the parameter $text.
		*/
		function get_course_by_name($text){ 
			$str_query="select * from se_course where course_name like %text%";
			
			if(!$this->query($str_query)){
				return false;
			}
                
			return $this->fetch();
		}
     }
?>