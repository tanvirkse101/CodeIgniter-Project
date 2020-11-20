<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="Description" content="Enter your description here" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title><?= $page_title ?></title>
</head>

<body onload="start_timer()" onbeforeunload="set_active_time()">

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
		<div class="container">
			<a class="navbar-brand float-left" href="#">e-Learning Research Lab [Intern Problems]</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
				aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse float-right" id="navbarResponsive">
				<ul class="navbar-nav ml-auto float-right">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url() ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('/News') ?>">News</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('/Blog') ?>">Blogs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('/Shop') ?>">Shop</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('/UserActivity') ?>">User Activity</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('/Activity') ?>">Activity Database</a>
					</li>
					<li class="nav-item">
						<?php 
							if($this->session->userdata('logged_in')==FALSE){
								echo '<a class="nav-link" href="'.base_url('/register').'">Register</a>';
							}
						?>
					</li>
					<li class="nav-item">
						<?php 
							if($this->session->userdata('logged_in')==FALSE){
								echo '<a class="nav-link" href="'.base_url('/login').'">Login</a>';
							}
						?>
					</li>
					<li class="nav-item">
						<?php 
							if($this->session->userdata('logged_in')==TRUE){
								echo '<a class="nav-link" href="'.base_url('login/logout').'">Logout</a>';
							}
						?>
					</li>
				</ul>
			</div>
		</div>
	</nav>
