<?
/**

*@author Daniel Adjierteh
* This code is to test the add_faculty function.

*/

include ("../classes/faculty.php");

class AddFacultyTest extends PHPUnit_Framework_TestCase {

}

	public function test_add_faculty()
	{
		/**

		* Put in some inout variable to test code.

		*/

		$id = 25162015;
		$fname = "Daniel";
		$lname = "Adjierteh";
		$status = "Lecturer";
		$email = "daniel.adjierteh@ashesi.edu.gh";
		$telphone = "0549740360"
		$officehour = "10;00 - 11:00";
		$username = "daniel.adjierteh";
		$pword = "25162016currant";

		$obj = new faculty();
		/**

		* This stores all the parameters into the row variable

		*@param varchar id for the id number of faculty

		*@param string fname for the name of faculty

		*@param string lname for the name of faculty

		*@param string status for the status of faculty whether lecturer or intern

		*@param varchar email for the email of faculty

		*@param varchar telephone for the telephone of faculty

		*@param varchar officehour for the officehour of faculty

		*@param varchar username for the username of faculty

		*@param varchar pword for the pword of faculty
		*/
		$row = $obj->add_faculty($id, $fname, $lname,$status,$email,$telephone,$officehour,$username,$pword);

		$this -> assertEquals(true, $row)
	}

?>




