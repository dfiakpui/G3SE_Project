<?

include ("../classes/course.php");

class ViewCourseTest extends PHPUnit_Framework_TestCase {

}

public function get_all_course()
{

	$obj = new course();
	$row = $obj->get_all_courses();

	$this -> assertEquals(true, $row)
}

?>




