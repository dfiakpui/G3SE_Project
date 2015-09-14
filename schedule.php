<?php

/**
 * author: Obed Kobina Nsiah
 * date: September 11, 2015
 * description: A class to interface with mysql and run queries on the schedule table for a particular course in a database
 */
 
include_once("adb.php");

class schedule extends adb
{
	//Constructor method
	function schedule() {
		
	}
	
	/*
	Runs an insert query that inserts a week, date and topic values into the schedule table in the database
	@param $week the week number for the lesson
	@param $date the date on which the lesson will be given
	@param $topic topic for the day
	*/
	function add_schedule($week,$date,$topic) {
		$str_query = "insert into schedule set course_id = '0', week = '$week', date = '$date', topic = '$topic'";
			
		return $this->query($str_query);
	}
		
	function add_topic($topic) {
		$str_query = "insert into schedule set topic = '$topic'";
			
		return $this->query($str_query);
	}
		
	function get_schedule() {
		$str_query = "select * from schedule";
			
		if(!$this->query($str_query)) {
			return false;
		}
		
		return $this->fetch();;
	}

	function delete_schedule($id) {
		$str_query = "delete from schedule where schedule_id = $id";
			
		return $this->query($str_query);
	}
		
	function get_schedule_by_id($id) {
		$str_query = "select * from schedule where schedule_id = '$id'";
			
		if(!$this->query($str_query)) {
			return false;
		}
		
		return $this->fetch();
	}
		
	function update_schedule($id, $week, $date, $topic) {
		$str_query = "update schedule set week = '$week', date = '$date', topic = '$topic' where schedule_id = '$id'";
			
		return $this->query($str_query);
	}	
}
?>