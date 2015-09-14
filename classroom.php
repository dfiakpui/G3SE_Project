<?php
include_once("adb.php");
class classrooms extends adb{
	function classrooms(){

	}
	function add_classroom($num,$loc){
		$str_query="insert into classrooms set Hall_No='$num',Location='$loc'";

		return $this->query($str_query);
	}
	function get_classroom($id){
		$str_query="select * from classrooms
					where ID='$id'";
		if(!$this->query($str_query)){
			return false;
		}
		return $this->fetch();
	}
	function view_all(){
		$str_query="select * from classrooms";
		if(!$this->query($str_query)){
			return false;
		}
		return $this->fetch();
	}
	function update_classroom($id,$num,$loc){
		$str_query="update classrooms set Hall_No='$num',Location='$loc'
					where ID='$id'";
		return $this->query($str_query);
	}
	function delete_classroom($id){
		$str_query="delete from classrooms where ID='$id'";
		return $this->query($str_query);
	}
}
?>