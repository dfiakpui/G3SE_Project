<?php
include("../classes/course.php");
include("../classes/book.php");
$obj = new course();
$objBook = new book();

$course_code = $_REQUEST['course_code'];
$semester = $_REQUEST['semester'];
$year = $_REQUEST['year'];

if (isset($course_code)){

$row = $obj->get_course($course_code, $semester, $year);
$rowBook = $objBook->get_book_by_course($course_code, $semester, $year);

$html = "<div class = 'row'>";
$html .= "<div class='input-field col s11'>";
$html .= "<h4 class = 'center'>{$row['course_code']} {$row['course_name']}</h4>";
$html .= "<div class='input-field col s11 offset-s2'>";
$html .= "<p>{$row['department_name']} </p>";
$html .= "<p>{$row['semester']} {$row['year']}</p>";
$html .= "<p>{$row['description']} </p>";
$html .= "<p>{$row['objective']} </p>";
$html .= "<h5>Books</h5>";
$html .= "<p>{$rowBook['book_name']} </p>";
$html .= "<p>{$rowBook['author']}</p>";
$html .= "<p>{$rowBook['other_details']} </p>";
$html .= "</div></div></div>";

		
echo utf8_encode($html);
}
?>
