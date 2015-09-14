<?php

/**
 * author: Obed Kobina Nsiah
 * date: September 11, 2015
 * description: A class to interface with mysql and run queries on the lecturer table for a particular course in a database
 */
	
include_once("adb.php");
	
class lecturers extends adb
{
	//Constructor method
	function lecturers() {
		
	}
	
	/*
	@param $username username of the lecturer
	@param $password password of the lecturer
	@return one row from the lecturer table whose username and password fields are the values of the parameters
	*/
	function confirm_lecturer($username, $password) {
		$str_query = "select * from lecturers where password = MD5('$password') and username = '$username'";
		
		if(!$this->query($str_query)) {
			return false;
		}
			
		return $this->fetch();
	}
	

	/*
	This method adds a lecturer to the database
	@param $name name of the lecturer
	@param $office offie location of lecturer
	@param $hours office hours of lecturer
	@param $email email address of lecturer 
	@param $phone phone number of lecturer 
	@param $dept_id 
	@param $username username of lecturer 
	@param $password password lecturer wants to use
	@return true or false based whether or not quary was sucessful
	*/
	function add_lecturer($name, $office, $hours, $email, $phone, $dept_id, $username, $password) {
		$str_query = "insert into lecturers set name = '$name', office_number = '$office', office_hours = '$hours', 
			email = '$email', phone_number = '$phone', department_id = '$dept_id', username = '$username', password = MD5('$password')";
			
		return $this->query($str_query);
	}
	
	/*
	This returns a lecturer identified by a particular id
	@param $id the id of the lecturer being searched for
	@return one row from the lecturer table whose id field contains the value stored in the parameter $id.
	*/	
	function get_lecturer_by_id($id) {
		$str_query = "select * from lecturers where lecturer_id = '$id'";
			
		if(!$this->query($str_query)) {
			return false;
		}
			
		return $this->fetch();
	}
		
	/*
	@param $name the name of the lecturer being searched for
	@return one row from the lecturer table whose name field contains the value stored in the parameter $name. 
	*/	
	function get_lecturer_by_name($name) {
		$str_query = "select * from lecturers where name like '%$name%'";
			
		if(!$this->query($str_query)) {
			return false;
		}
			
		return $this->fetch();
	}
	
	/*
	@return all rows from the current data set in the lecturers table. 
	*/
	function get_lecturers() {
		$str_query = "select * from lecturers";
			
		if(!$this->query($str_query)) {
			return false;
		}
			
		return $this->fetch();
	}
	
	/*
	This method updates the info of a lecturer in the database
	@param $name name of the lecturer
	@param $office offie location of lecturer
	@param $hours office hours of lecturer
	@param $email email address of lecturer 
	@param $phone phone number of lecturer 
	@param $dept_id 
	@return true or false based whether or not quary was sucessful
	*/
	function update_lecturer($id, $name, $office, $hours, $email, $phone, $dept_id) {
		$str_query = "update lecturers set name = '$name', office_number = '$office', office_hours = '$hours', 
			email = '$email', phone_number = '$phone', department_id = '$dept_id' where username = '$id'";
			
		return $this->query($str_query);
	}
}
?>