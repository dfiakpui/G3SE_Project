<?php
	include_once("adb.php");
	
	class courses extends adb{
		
		function courses(){
		
		}  

		/** 
		*This is the view course code that queries the cdatabase and 
		*allows users to view a course.
	 	*@param $code This specifies the course by its course code
	 	*@param $semester This specifies the course by its semester (Spring, Summer or Year)
	 	*@param $year This specifies the course by its academic year (2015, 2016, ect) 
	 	*@return Output a view page that allow the user to view the course
	 	**/
		function get_course($code, $semester, $year){ 
			$str_query="Select * from se_course where course_code=$code AND
					semester=$semester AND year=$year";
			if(!$this->query($str_query)){
					return false;
				}
                    return $this->fetch();
			
			}  
     }
?>