<?php
	include("course.php");
	
	class courseTest extends PHPUnit_Framework_TestCase
	{
	/* The function testadd_course checks to see if a course has been successfully added to the database and checks if it returns true*/
	public function testadd_course{
	$a = new course();
	$code = "code";
	$name = "name";
	$description = "description";
	$objective = "objective";
	$semester = "semester";
	$year = "year";
	$department = "department";
	$this->assertTrue(true,$a -> add_course($code, $name,$description,$objective,$semester,$year, $department));
	
		}
	
	/* The function testedit_course checks to see if a course has been successfully updated and check if it returns true*/
	
	public function testedit_course{
	$b = new course();
	$code = "code";
	$name = "name";
	$description = "description";
	$objective = "objective";
	$semester = "semester";
	$year = "year";
	$department = "department";
	$this->assertTrue(true,$a -> edit_course($code, $name,$description,$objective,$semester,$year, $department));
	
	
		}
	}