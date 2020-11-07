	<!-- Page Content -->
	<div class="container">

		<form action="<?= base_url(); ?>register/doRegister" method="post">
			<div class="row">
				<div class="col">
				</div>
				<div class="col-8 shadow mt-5 rounded">
					<div class="form-group m-5">
						<h2 class="text-center"><i class="fas fa-user"></i> User </h2>
						<!-- show error messages if the form validation fails -->
						<?php if ($this->session->flashdata()) { ?>
						<div class="alert alert-danger">
							<?=$this->session->flashdata('errors'); ?>
						</div>
						<?php } ?>

						<hr>
						<div class="row mt-2">
							<div class="col-3">
								<label for="usertype">User Type:</label>
							</div>
							<div class="col">
								<select class="form-control form-control-sm" name="usertype" id="usertype">
									<option value="Student">Student</option>
									<option value="Teacher">Teacher</option>
								</select>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-3">
								<label for="email">Email address:</label>
							</div>
							<div class="col">
								<input name="email" type="email" class="form-control form-control-sm"
									placeholder="Enter email" id="email ">
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-3">
								<label for="uname">Usernamer:</label>
							</div>
							<div class="col">
								<input type="text" name="uname" class="form-control form-control-sm"
									placeholder="Unique user name">
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-3">
								<label for="pwd">Password:</label>
							</div>
							<div class="col">
								<input type="password" class="form-control form-control-sm" id="pwd" name="password"
									placeholder="Password">
							</div>
							<div class="col-2">
								<input type="checkbox" class="align-middle" onclick="viewpassword()"> view
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-3">
								<label for="pwdcon">Confirm password:</label>
							</div>
							<div class="col">
								<input type="password" class="form-control form-control-sm" id="pwdcon"
									placeholder="Retype password">
							</div>
							<div class="col-2"></div>
						</div>
						<br>
						<h2 class="text-center"><i class="far fa-address-card"></i> User Info </h2>
						<hr>
						<div class="row mt-2">
							<div class="col-3">
								<label for="name">Full name:</label>
							</div>
							<div class="col">
								<input type="text" name="name" class="form-control form-control-sm" placeholder="Full name"
									id="name">
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-3">
								<label for="dateofbirth">Date of birth:</label>
							</div>
							<div class="col">
								<input type="date" class="form-control form-control-sm" id="dateofbirth">
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-3">
								<label for="gender">Gender:</label>
							</div>
							<div class="col">
								<select class="form-control form-control-sm" name="gender" id="gender">
									<option> Male </option>
									<option> Female </option>
								</select>
							</div>
						</div>
						<div class="row mt-2" id="studentidno">
							<div class="col-3">
								<label for="studentid">Student ID:</label>
							</div>
							<div class="col">
								<input type="number" class="form-control form-control-sm" placeholder="12345678"
									name="studentid" id="studentid">
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-3">
								<label for="studentid">Phone:</label>
							</div>
							<div class="col">
								<input type="number" name="phone" class="form-control form-control-sm"
									placeholder="01712345678" id="phone">
							</div>
						</div>
						<div class="row mt-2" id="designation" style="display: none;">
							<div class="col-3">
								<label for="gender">Designation:</label>
							</div>
							<div class="col">
								<select name="designation" class="form-control form-control-sm" id="desg">
									<option> Teacher </option>
									<option> Assistant </option>
									<option> Professor </option>
								</select>
							</div>
						</div>
						<div class="row mt-2" id="addr" style="display: none;">
							<div class="col-3">
								<label for="address">Address:</label>
							</div>
							<div class="col">
								<textarea name="address" class="form-control" id="address" rows="2"></textarea>
							</div>
						</div>
						<hr>
						<button class="btn btn-primary mt-2 mb-2 float-right" type="submit">Sumbit</button>
						<br>
					</div>
				</div>
				<div class="col">
				</div>
			</div>
		</form>



	</div>

	<script>
		function viewpassword() {
			var x = document.getElementById("pwd");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}

		$('#usertype').on('change', function () {

			if (this.value == "Student") {
				$('#designation').hide();
				$('#studentidno').show();
				$('#addr').hide();
			} else {
				$('#designation').show();
				$('#studentidno').hide();
				$('#addr').show();
			}

		});

	</script>
