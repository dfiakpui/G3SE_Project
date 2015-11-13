<?php
include("../classes/course.php");
$obj = new course();

$row = $obj->get_all_courses();

$html = "<h3 class='header center'>Your Courses</h3>";
 
$html .= "<table class='striped highlight'><thead><tr>
			<th data-field='department_name'>Course Department</th>
			<th data-field='course_code'>Course Code</th>
			<th data-field='course_name'>Course Name</th>
			<th data-field='semester'>Course Semesteer</th>
			<th data-field='year'>Course Year</th>
		</tr></thead>";

	$html.= "<tbody>";

while($row){
	$html.= "<tr>
            <td>{$row['course_code']}</td>
            <td>{$row['course_name']}</td>
            <td>{$row['department_name']}</td>
            <td>{$row['semester']}</td>
            <td>{$row['year']}</td>
          	</tr>";
    $row = $obj->fetch();
}

$html.= "</tbody>";
$html.= "</table>";
echo utf8_encode($html);

?>
