<div class="container border" style="height: 100vh;">

	<form action="<?= base_url(); ?>login/doLogin" method="post">
		<div class="row">
			<div class="col">
			</div>
			<div class="col-8 shadow mt-5 rounded">
				<div class="form-group m-5">
					<h2 class="text-center"><i class="fas fa-user"></i> Login </h2>
					<hr>

					<?php if ($this->session->flashdata()) { ?>
						<div class="alert alert-warning">
							<?= $this->session->flashdata('msg'); ?>
						</div>
					<?php } ?>

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
							<label for="pwd">Password:</label>
						</div>
						<div class="col">
							<input type="password" class="form-control form-control-sm" id="pwd" name="password"
								   placeholder="Password">
						</div>
					</div>

					<hr>
					<button class="btn btn-primary mt-2 mb-2 float-right" type="submit">Login</button>
					<br>
				</div>
			</div>
			<div class="col">
			</div>
		</div>
	</form>
</div>
