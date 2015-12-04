<?php
	include_once("adb.php");
	
	class faculty extends adb{
	
		function faculty(){

		}
		
		/** This is the add_faculty function that adds faculties into the database by taking parameters unique_id,name (first and last),email and telephone number
		* @param $id this is the id number of the faculty
		* @param $firstname this is the name of the faculty
		* @param $firstname this is the name of the faculty
		* @param $status this is the current status of the faculty
		* @param $email this is the email address of the faculty
		* @param $telephone this is the contact number of the faculty
		* @param $office_hour this is the free time of the faculty on campus
		* @param $username this is the user_name of the faculty
		* @param $password this is the password of the faculty
		*/
		function add_faculty($id, $firstname, $lastname,$status,$email,$telephone,$office_hour,$username,$pword){
			$str_query = "Insert into se_faculty set unique_id='id', first_name='$firstname',last_name='$lastname', status='$status', email='$email', telephone='$telephone', office_hours='$officehours',username=$username',password=$pword'";
			return $this->query($str_query);
		}    
		
		