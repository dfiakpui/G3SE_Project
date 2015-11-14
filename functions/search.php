<?php

include("../classes/course.php");
$obj = new course();

$text = $_REQUEST['text'];

if (isset($text) && $text != ""){
	$row = $obj->search_course($text);
	
	$html = "<div class = 'container'>";	
	$html .= "<ul class='collection with-header'>";
	$html .= "<li class='collection-header center'><h4>Search Results</h4></li>";
	while($row){
		$html .= "<li class='collection-item'><div>{$row['course_code']} {$row['course_name']} {$row['semester']} {$row['year']}<a href='#!' class='secondary-content'><i class='material-icons'>send</i></a></div></li>";
	
		$row=$obj->fetch();	
	}
	 
	$html .= "</ul></div>";
	echo utf8_encode ($html);
}
?>