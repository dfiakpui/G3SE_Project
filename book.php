<?php
include_once("adb.php");
class book extends adb{
	
	function book(){}
	//function to display the contents
	function display(){
		if($this->connect()){
			$str_query = "SELECT book_id, book_name,department_id from books";
			if(!$this->query($str_query)){
				return false;
			}
			// return false;
		}
	}
	
	//function to add a book
	function add_book($name,$id){
			if($this->connect()){
			$str_query = "INSERT INTO books SET BOOK_Name='$name',
						department_id='$id'";
			return $this->query($str_query);		
			}
	}
	
	function update( $book_name, $department_id){
		if($this->connect()){
			$str_query="UPDATE books SET book_name='$book_name', department_id='$department_id'";
			return $this->query($str_query);
		}
	}
	
	function delete($id){
		if($this->connect()){
			$str_query="DELETE * FROM books WHERE book_id='$id'";
			
			return $this->query($str_query);
		}
	}
	
	function getBook($id){
		if($this->connect()){
			$str_query="SELECT * FROM books WHERE book_id='$id'";
			return $this->query($str_query);
		}
	}
}
?>