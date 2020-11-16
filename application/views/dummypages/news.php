  <!-- Page Content -->
  <div class="container">

  	<!-- Heading Row -->
  	<div class="row align-items-center my-5">
  		<div class="col-lg-7">
  			<img class="img-fluid rounded mb-4 mb-lg-0" src="http://placehold.it/900x400" alt="">
  		</div>
  		<!-- /.col-lg-8 -->
  		<div class="col-lg-5">
  			<h1 class="font-weight-light">Business Name or Tagline</h1>
  			<p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it
  				makes a great use of the standard Bootstrap core components. Feel free to use this template for any project
  				you want!</p>
  			<a class="btn btn-primary" href="#">Call to Action!</a>
  		</div>
  		<!-- /.col-md-4 -->
  	</div>
  	<!-- /.row -->

  	<!-- Call to Action Well -->
  	<div class="card text-white bg-secondary my-5 py-4 text-center">
  		<div class="card-body">
  			<p class="text-white m-0">This call to action card is a great place to showcase some important information or
  				display a clever tagline!</p>
  		</div>
  	</div>

  	<!-- Content Row -->
  	<div class="row">
  		<div class="col-md-4 mb-5">
  			<div class="card h-100">
  				<div class="card-body">
  					<h2 class="card-title">Card One</h2>
  					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam,
  						maxime minus quam molestias corporis quod, ea minima accusamus.</p>
  				</div>
  				<div class="card-footer">
  					<a href="#" class="btn btn-primary btn-sm">More Info</a>
  				</div>
  			</div>
  		</div>
  		<!-- /.col-md-4 -->
  		<div class="col-md-4 mb-5">
  			<div class="card h-100">
  				<div class="card-body">
  					<h2 class="card-title">Card Two</h2>
  					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at
  						dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi
  						labore.</p>
  				</div>
  				<div class="card-footer">
  					<a href="#" class="btn btn-primary btn-sm">More Info</a>
  				</div>
  			</div>
  		</div>
  		<!-- /.col-md-4 -->
  		<div class="col-md-4 mb-5">
  			<div class="card h-100">
  				<div class="card-body">
  					<h2 class="card-title">Card Three</h2>
  					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam,
  						maxime minus quam molestias corporis quod, ea minima accusamus.</p>
  				</div>
  				<div class="card-footer">
  					<a href="#" class="btn btn-primary btn-sm">More Info</a>
  				</div>
  			</div>
  		</div>
  		<!-- /.col-md-4 -->

  	</div>
  	<!-- /.row -->

  </div>
  <!-- /.container -->
  <script>
	var timer;
	var timeStart;
	var timeSpentOnSite = getTimeSpentOnSite();
	var id = "<?php echo $this->session->userdata('id');?>";
	var pageurl = "<?php echo current_url();?>";

	function getTimeSpentOnSite() {
		timeSpentOnSite = parseInt(timeSpentOnSite);
		timeSpentOnSite = isNaN(timeSpentOnSite) ? 0 : timeSpentOnSite;
		return timeSpentOnSite;
	}

	function start_timer() {
		timerStart = Date.now();
		timer = setInterval(function () {
			timeSpentOnSite = getTimeSpentOnSite() + (Date.now() - timerStart);
			timerStart = parseInt(Date.now());
		}, 1000);
	}

	function set_active_time() {

		$.ajax({
			type: "POST",
			url: "<?php echo base_url('UserSession/set_active_time') ?>",
			dataType: "json",
			data: {
				id: id,
				pageurl: pageurl,
				timeSpentOnSite: timeSpentOnSite,
			},
			success: function (data) {
				alert("I got a view");
			}
		});


	}

</script>
