<?php
include("../classes/book.php");
$obj = new book();

$row = $obj->get_all_books();
 
$html = "<table class='highlight'><thead><tr>
			
			<th data-field='book_code'>Book Code</th>
			<th data-field='book_name'>Book Name</th>
			<th data-field='author'>Book Author</th>
			<th data-field='course_code'>Course Code</th>
			<th data-field='semester'>Semester</th>
			<th data-field='year'>Year</th>
		</tr></thead>";

	$html.= "<tbody>";

while($row){
	$html.= "<tr>
			<td>{$row['book_code']}</td>
	        <td>{$row['book_name']}</td>
            <td>{$row['author']}</td>
            <td>{$row['course_code']}</td>
            <td>{$row['semester']}</td>
            <td>{$row['year']}</td>
          	</tr>";
    $row = $obj->fetch();
}

$html.= "</tbody>";
$html.= "</table>";
echo utf8_encode($html);

?>
