<?php

include("../classes/course.php");	

class CourseTest extends PHPUnit_Framework_TestCase
{
	
	/**
	* This function tests the get_course function of the course class.
	* It ensures that it does not return a false when there exists the course in the database.
	*/
    public function test_get_course()
    {
        
        $obj = new course();
		
		$course_code = 'CS433';
		$semester = 'Fall';
		$year = 2016;
		
        $row = $obj->get_course($course_code, $semester, $year);
		
        $this->assertNotEquals(false, $row);
    }
	
	/**
	* This function tests the search_course function of the course class.
	* It ensures that it does not return a false when there exists the course in the database.
	*/
	public function test_search_course()
    {
        
        $obj = new course();
		
		$text = 'engineering';
		
        $row = $obj->search_course($text);
		
        $this->assertNotEquals(false, $row);
    }
}

?>