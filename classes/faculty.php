<?php
	include_once("adb.php");
	
	class faculty extends adb{
	
		function faculty(){

		}
		
		/** 

		* This is the add_faculty function that adds faculties into the database by taking parameters unique_id,name (first and last),email and telephone number

		* @param int $id this is the id number of the faculty

		* @param string $fname this is the name of the faculty

		* @param string $lname this is the name of the faculty

		* @param string $status this is the current status of the faculty

		* @param varchar $email this is the email address of the faculty

		* @param varchar $telephone this is the contact number of the faculty

		* @param varvhar $officehour this is the free time of the faculty on campus

		* @param varchar $username this is the user_name of the faculty

		* @param varchar $pword this is the password of the faculty

		* @return string Show the success addition of a faculty into the database

		**/
		function add_faculty($id, $fname, $lname,$status,$email,$telephone,$officehour,$username,$pword){
			$str_query = "Insert into se_faculty set unique_id='id', first_name='$fname',last_name='$lastname', status='$status', email='$email', telephone='$telephone', office_hours='$officehours',username=$username',password=$pword'";
			return $this->query($str_query);
		}

		/** 

		* This is the get_faculty function that views faculties by taking parameters unique_id,name (first and last),email,status and username

		* @param int $id this is the id number of the faculty

		* @param string $fname this is the name of the faculty

		* @param string $lname this is the name of the faculty

		* @param string $status this is the current status of the facult

		* @param varchar $username this is the user_name of the faculty

		* @return string Show the success of viewing a faculty into the database

		**/
		function get_faculty($id, $fname, $lname, $status, $username){ 
			$str_query="select * from se_faculty where unique_id='$id',first_name='$fname',last_name='$lastname',status='$status',username=$username'";
				
			if(!$this->query($str_query)){
				return false;
			}
				
			return $this->fetch();
		}

		/**

		*This is to help view all faculties in the databse

		*@return output a view page where the user can view the faculties in the database

		**/
		function get_all_faculties(){ 
			$str_query="Select * from se_faculties";
				
			if(!$this->query($str_query)){
				return false;
			}
				
			return $this->fetch();
		} 

		/**

		* This returns all faculties whose the variable $text in its name

		* @param $text the string to be searched for in the name

		* @return one row from the se_faculty table whose name field contains the value stored in the parameter $text.
		
		*/
		function search_faculty($text){ 
			$str_query="select * from se_faculty where first_name like '%$text%' OR last_name like '%$text%' OR username like '%text%'";
			
			if(!$this->query($str_query)){
				return false;
			}
				   
			return $this->fetch();
		} 
	}
?>    
		
		