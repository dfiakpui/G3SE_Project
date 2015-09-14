<?php

include_once ("adb.php");

class assessment extends adb
{
	function assessment()
	{

	}
	
	function add_assessment($cid,$weight,$desc)
	{
		$str_query="insert into assessment set Course_id='$cid',
			Weight='$weight',Description='$desc'";

		return $this->query($str_query);
	}
	
	function get_assessment($id)
	{
		$str_query="select * from assessment
					where Assess_id='$id'";
		if(!$this->query($str_query)) {
			
			return false;
		}
		return $this->fetch();
	}
	
	function view_all()
	{
		$str_query="select * from assessment";
		if(!$this->query($str_query)) {
			return false;
		}
		
		return $this->fetch();
	}
	
	function update_assessment($id,$cid,$weight,$desc)
	{
		$str_query="update assessment set Course_id='$cid',
				Weight='$weight',Description='$desc'
					where Assess_id='$id'";
					
		return $this->query($str_query);
	}
	
	function delete_assessment($id)
	{
		$str_query="delete from assessment where Assess_id='$id'";
		return $this->query($str_query);
	}
}
?>