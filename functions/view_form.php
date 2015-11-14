<?php
$form = "<div class='row'>
			<form id = 'form' method= 'post' action='#' class='col s12' novalidate = 'novalidate'>
				<div class='row'>
					<div class='input-field col s3'>
						<input id='course_code' name= 'course_code' type='text' class = 'validate' required = '' aria-required='true'>
						<label for='course_code'>Course Code</label>
					</div>
					<div class='input-field col s7 offset-s1'>
						<input id='course_name' name= 'course_name' type='text' class = 'validate' required = ''>
						<label for='course_name'>Course Name</label>
					</div>
				</div>
				<div class='row'>
					<div class='input-field col s11'>
						<textarea id='description' name= 'description' class='materialize-textarea' required = ''></textarea>
						<label for='description'>Description</label>
					</div>
				</div>
				<div class='row'>
					<div class='input-field col s11'>
						<textarea id='objective' name= 'objective' class='materialize-textarea' required =''></textarea>
						<label for='objective'>Objective</label>
					</div>
				</div>
				
				<div class='row'>
					<div class='input-field col s3'>
					<input id='department' name= 'department' type='text' class = 'validate' required = ''>
					<label for='department'>Department</label>	
				</div>

					<div class='input-field col s3 offset-s1'>
							<input id='semester' name= 'semester' type='text' class = 'validate' required = ''>
							<label for='semester'>Semester</label>
					</div>
					<div class='input-field col s3 offset-s1'>
							<input id='year' name= 'year' type='text' class = 'validate' required = ''>
							<label for='year'>Year</label>
					</div>
				</div>
			</form>
			<button onclick= 'add()' id = 'add' class='btn waves-effect waves-light' type='submit' name='action'>Submit
					<i class='material-icons right'>send</i>
				</button>
				
	</div>";

echo utf8_encode ($form);
?>