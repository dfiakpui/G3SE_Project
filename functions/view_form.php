<?php
$form = "<html>
	<form class='col s6'>
		<div class='row'>
			<div class='input-field col s6'>
				<input id='course_code' type='text' >
				<label for='course_code'>Course Code</label>
			</div>
		</div>		
			
	<div class='row'>
		<div class='input-field col s6'>
			<input id='course_name' type='text'>
			<label for='course_name'>Course Name</label>
		</div>
	</div>
	
	<div class='row'>
		<div class='input-field col s6'>
          <textarea id='textarea1' class='addcourse.php'></textarea>
          <label for='textarea1'>TObjective</label>
        </div>
	</div>
		
	<div class='row'>
		<div class='input-field col s6'>
          <textarea id='textarea1' class='addcourse.php'></textarea>
          <label for='textarea1'>Description</label>
        </div>
	</div>
	
		
	<div class='row'>
		<div class='input-field col s6'>
			<input id='year' type='text'>
			<label for='year'>Year</label>
		</div>
	</div>
	
	
	<div class='input-field col s12'>
		<select>
			<option value='' disabled selected>Choose your option</option>
			<option value='1'>Option 1</option>
			<option value='2'>Option 2</option>
			<option value='3'>Option 3</option>
		</select>
		<label>Year Select</label>
  </div>

	
	</form>
	
  
</html>";

echo utf8_encode ($form);
?>