<?php
	include_once("adb.php");
	class department extends adb{
		function department(){
	
		}
		
		
		function add_department($name){
			if($this->connect()){
			
			$str_query = "INSERT INTO department SET DEPARTMENT_NAME='$name'";
		
			return $this->query($str_query);
			}
			
		}
		/* 
		function to display the department table
		*/
		function updateDepartment($name){
			if($this->connect()){
				$str_query="UPDATE department SET DEPARTMENT_NAME ='$name'";
				return $this->query($str_query);
			}
		}
		function display_departments(){
			if($this->connect()){
				$str_query = "SELECT department_id,department_name from department";
				if($this->query($str_query)){
					return true;
				}
			}
			return false;
			}
		
		
		/*
		function to delete the a department from the department table
		*/
		function delete_department($id){
			if($this->connect()){
				$str_query = "DELETE from DEPARTMENT WHERE DEPARTMENT_ID ='$id'";
				
				return $this->query($str_query);
			}
		}
		
		/*
		function to update the existing details of department
		*/
		function get_department_Name($id,$name){
			if($this->connect()){
			$str_query = "SELECT department_name from departments";
			if(!$this->query($str_query)){
				return false;
			}
			return $this->fetch();
			
			}
		}
		function update($str_query){
			if($this->connect()){
				return $this->query($str_query);
			}
		}
		
	}
		
?>