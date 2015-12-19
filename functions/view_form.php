<div id="addFaculty" class="col s12">
				<div class = "row">
				<form id = 'form' method= 'post' action='#' class='col s12' novalidate = 'novalidate'>
					<div class='row'>
						<div class='input-field col s3'>
						<input id='unique_id' name= 'unique_id' type='text' class = 'validate' required = '' aria-required='true'>
						<label for='unique_id'>Faculty ID</label>
					</div>
					<div class='input-field col s7 offset-s1'>
						<input id='first_name' name= 'first_name' type='text' class = 'validate' required = ''>
						<label for='first_name'>First Name</label>
					</div>
					<div class='input-field col s7 offset-s4'>
						<input id='last_name' name= 'last_name' type='text' class = 'validate' required = ''>
						<label for='last_name'>Last Name</label>
					</div>
					</div>
					<div class='row'>
						<div class='input-field col s11'>
							<textarea id='status' name= 'status' class='materialize-textarea' required = ''></textarea>
							<label for='status'>Status</label>
						</div>
					</div>
					<div class='row'>
						<div class='input-field col s11'>
							<textarea id='email' name= 'email' class='materialize-textarea' required =''></textarea>
							<label for='email'>Email Address<i>(e.g. abc@ashesi.edu.gh)</i></label>
						</div>
						<div class='input-field col s11'>
							<textarea id='telephone' name= 'telephone' class='materialize-textarea' required =''></textarea>
							<label for='telephone'>Telephone Number</label>
						</div>
						<div class='input-field col s11'>
							<textarea id='office_hours' name= 'office_hours' class='materialize-textarea' required =''></textarea>
							<label for='office_hours'>Office Hours</label>
						</div>
						<div class='input-field col s11'>
							<textarea id='username' name= 'username' class='materialize-textarea' required =''></textarea>
							<label for='username'>Username</label>
						</div>
						<div class='input-field col s11'>
							<textarea id='password' name= 'password' class='materialize-textarea' required =''></textarea>
							<label for='password'>Password</label>
						</div>
					</div>			
				</form>
				<a href = "#addFaculty"><button  class='btn waves-effect waves-light' type='submit' name='action' onclick = "editFaculty()">Next
						<i class='material-icons right'>update</i>
					</button></a>
				</div>
			</div>
		</div>
		
	</body>
 </html> 
