<div class="container border p-2">
	<div class="jumbotron bg-dark text-white">
		<h1 class="text-center">User Activity</h1>
	</div>
	<!-- Registered table -->
	<div class="p-2">
		<div class="row">
			<h2 id="registered">Registered User Data:</h2><a class="btn btn-primary" style="margin-left: 55%;"
															 href="#unregistered" role="button">Go to unregistered</a>
			<input class="form-control" id="myInput" type="text" placeholder="Search..">
			<br>
			<table class="table table-bordered table-striped">
				<thead>
				<tr>
					<th>UserID</th>
					<th>Name</th>
					<th>Sess.ID</th>
					<th>IP</th>
					<th>OS</th>
					<th>Browser</th>
					<th>Date</th>
					<th>Title</th>
					<th>No.Visits</th>
					<th>ActiveTime</th>
				</tr>
				</thead>
				<tbody id="myTable">
				<?php
				$this->db->select('users.user_id,users.name,user_session.id,user_session.ipaddress,user_session.os,user_session.browser,user_activity.request_datetime,user_activity.title,user_activity.number_times,user_activity.active_time');
				$this->db->from('users');
				$this->db->join('user_session', 'users.user_id = user_session.user_id');
				$this->db->join('user_activity', 'user_session.id = user_activity.id');
				$this->db->order_by('user_activity.request_datetime', 'DESC');
				$join_query = $this->db->get()->result_array();
				foreach ($join_query as $d) {
					echo '<tr>';
					echo '<td>' . $d['user_id'] . '</td>';
					echo '<td>' . $d['name'] . '</td>';
					echo '<td>' . $d['id'] . '</td>';
					echo '<td>' . $d['ipaddress'] . '</td>';
					echo '<td>' . $d['os'] . '</td>';
					echo '<td>' . $d['browser'] . '</td>';
					echo '<td>' . $d['request_datetime'] . '</td>';
					echo '<td>' . $d['title'] . '</td>';
					echo '<td>' . $d['number_times'] . '</td>';
					echo '<td>' . round(($d['active_time']) / 1000) . 's</td>';
					echo '</tr>';
				}
				?>
				</tbody>
			</table>
		</div>
	</div>
	<!-- Unregistered table -->
	<div class="p-2">
		<div class="row">
			<h2 id="unregistered">Unregistered User Data:</h2> <a style="margin-left: 55%;" class="btn btn-primary"
																  href="#registered" role="button">Go to registered</a>
			<input class="form-control" id="myInput2" type="text" placeholder="Search..">
			<br>
			<table class="table table-bordered table-striped">
				<thead>
				<tr>
					<th>Sess.ID</th>
					<th>IP</th>
					<th>OS</th>
					<th>Browser</th>
					<th>Date</th>
					<th>Title</th>
					<th>No.Visits</th>
					<th>ActiveTime</th>
				</tr>
				</thead>
				<tbody id="myTable2">
				<?php
				$this->db->select('user_session.id,user_session.ipaddress,user_session.os,user_session.browser,user_activity.request_datetime,user_activity.title,user_activity.number_times,user_activity.active_time');
				$this->db->from('user_session');
				$this->db->join('user_activity', 'user_session.id = user_activity.id');
				$this->db->order_by('user_activity.request_datetime', 'DESC');
				$join_query2 = $this->db->get()->result_array();
				foreach ($join_query2 as $d2) {
					echo '<tr>';
					echo '<td>' . $d2['id'] . '</td>';
					echo '<td>' . $d2['ipaddress'] . '</td>';
					echo '<td>' . $d2['os'] . '</td>';
					echo '<td>' . $d2['browser'] . '</td>';
					echo '<td>' . $d2['request_datetime'] . '</td>';
					echo '<td>' . $d2['title'] . '</td>';
					echo '<td>' . $d2['number_times'] . '</td>';
					echo '<td>' . round(($d2['active_time']) / 1000) . 's</td>';
					echo '</tr>';
				}
				?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	$(document).ready(function () {
		//function for registered table
		$("#myInput").on("keyup", function () {
			var value = $(this).val().toLowerCase();
			$("#myTable tr").filter(function () {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});
		//function for unregistered table
		$("#myInput2").on("keyup", function () {
			var value = $(this).val().toLowerCase();
			$("#myTable2 tr").filter(function () {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});
	});
</script>
