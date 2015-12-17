<?

include ("../classes/book.php");

class ViewBookTest extends PHPUnit_Framework_TestCase {

}

public function get_all_books()
{

	$obj = new book();
	$row = $obj->get_all_books();

	$this -> assertEquals(true, $row)
}

?>




