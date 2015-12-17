<?php

include("../classes/book.php");	

class BookTest extends PHPUnit_Framework_TestCase
{
	/**
	* This function tests the add_book function of the book class.
	*/
    public function test_add_book()
    {
        $code = '543121646'; 
		$name = 'Introduction to Robotics';  
		$author = 'Mataric Primer';
		$other = 'Good Resource';
		$course_code = 'CS554';
		$year = 2015;
		$semester = 'Fall';
        
		$obj = new book();
		
        $row = $obj->add_book($code, $name, $author, $other, $course_code, $year, $semester);
		
        $this->assertEquals(true, $row);
    }
	
	/**
	* This function tests the get_book_by_course function of the book class.
	* It ensures that it does not return a false when there exists the book in the database.
	*/
	public function test_get_book_by_course(){
    {
        
        $obj = new book();
		
		$course_code = 'CS554';
		$year = 2015;
		$semester = 'Fall';
		
        $row = $obj->get_book_by_course($course_code, $semester, $year);
		
        $this->assertNotEquals(false, $row);
    }
}

?>