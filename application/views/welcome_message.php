<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="Description" content="Enter your description here" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<title>Title</title>
</head>

<body>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
		<div class="container">
			<a class="navbar-brand text-center" href="#">e-Learning Research Lab</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
				aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto float-right">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Page Content -->
	<div class="container">
		<div class="row">
			<div class="col">
			</div>
			<div class="col-8 shadow mt-5 rounded">
				<div class="form-group m-5">
					<h2 class="text-center"><i class="fas fa-user"></i> User </h2>
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
							<input type="email" class="form-control form-control-sm" placeholder="Enter email"
								id="email ">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-3">
							<label for="uname">Usernamer:</label>
						</div>
						<div class="col">
							<input type="name" class="form-control form-control-sm" placeholder="Unique user name"
								id="uname">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-3">
							<label for="pwd">Password:</label>
						</div>
						<div class="col">
							<input type="password" class="form-control form-control-sm" id="pwd" placeholder="Password">
						</div>
						<div class="col-2">
							<input type="checkbox" class="align-middle" onclick="viewpassword()"> view
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-3">
							<label for="pwd-con">Confirm password:</label>
						</div>
						<div class="col">
							<input type="password" class="form-control form-control-sm" id="pwd-con"
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
							<input type="name" class="form-control form-control-sm" placeholder="Full name" id="name">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-3">
							<label for="gender">Gender:</label>
						</div>
						<div class="col">
							<select class="form-control form-control-sm" id="gender">
								<option> Male </option>
								<option> Female </option>
							</select>
						</div>
					</div>
					<div class="row mt-2" name="designation" id="designation">
						<div class="col-3">
							<label for="gender">Designation:</label>
						</div>
						<div class="col">
							<select class="form-control form-control-sm" id="gender">
								<option> Teacher </option>
								<option> Assistant </option>
								<option> Professor </option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
			</div>
		</div>
	</div>
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

		$(document).ready(function () {
			toggleDesignation();
			$("#usertype").change(function () {
				toggleDesignation();
			});
		});

		function toggleDesignation() {
			if ($("#usertype").text()=="Student") {
				$("#designation").hide();
			}
				
			else {
				$("#designation").show();
			}
		}

	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
