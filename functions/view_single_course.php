<?php
include("../classes/course.php");
include("../classes/book.php");
$obj = new course();
$objBook = new book();

$course_code = $_REQUEST['code'];
$semester = $_REQUEST['semester'];
$year = $_REQUEST['year'];

if (isset($course_code)){

$row = $obj->get_course($course_code, $semester, $year);
$rowBook = $objBook->get_book_by_course($course_code, $semester, $year);
 
$html = "<h1>{$row['course_code']} {$row['course_name']}</h1>";
		
echo utf8_encode($html);
}
?>
