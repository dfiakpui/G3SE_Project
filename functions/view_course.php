<?php
include("../classes/course.php");
$obj = new course();

$code = $_POST['code'];
$semester = $_POST['semester'];
$year = $_POST['year'];

if (isset($code) && $code != ""){
$row = $obj->get_course($code, $semester, $year);
 
$html = "<table class='highlight'><thead><tr>
			<th data-field='department_name'>Course Department</th>
			<th data-field='course_code'>Course Code</th>
			<th data-field='course_name'>Course Name</th>
			<th data-field='semester'>Course Semesteer</th>
			<th data-field='year'>Course Year</th>
			<th data-field='objective'>Course Objective</th>
		</tr></thead>";

	$html.= "<tbody>";

while($row){
	$html.= "<tr>
	        <td>{$row['department_name']}</td>
            <td>{$row['course_code']}</td>
            <td>{$row['course_name']}</td>
            <td>{$row['semester']}</td>
            <td>{$row['year']}</td>
            <td>{$row['objective']}</td>
          	</tr>";
    $row = $obj->fetch();
}

$html.= "</tbody>";
$html.= "</table>";
echo utf8_encode($html);
}
?>
