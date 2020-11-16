<div class="jumbotron text-center bg-primary text-white border border-white rounded">
	<h1>
		<?php 
            if($this->session->userdata('logged_in')){
                echo 'Welcome '.$this->session->userdata('name');
            }
            else{
                echo 'You are not logged in' ;
            }
        ?>
	</h1>
</div>
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
