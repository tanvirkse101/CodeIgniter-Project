<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="Description" content="Enter your description here" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
	<title><?= $page_title ?></title>
</head>

<body onload="myFunction()">

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
					<li>
						<a href="<?= base_url('/register') ?>" class="btn btn-danger m-2 my-2 my-sm-0"> Register </a>
					</li>
					<li>
						<a href="<?= base_url('/login') ?>" class="btn btn-primary m-2 my-2 my-sm-0"> Login </a>
					</li>
					<li>
						<a class="btn btn-danger m-2 my-2 my-sm-0" href="<?=base_url().'login/logout';?>">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
