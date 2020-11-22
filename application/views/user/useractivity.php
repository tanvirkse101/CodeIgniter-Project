<div class="container border shadow p-3">
	<div class="m-2">
		<div class="row jumbotron bg-dark text-white justify-content-center">
			<h1 class="display-4">Registered Users List</h1>
		</div>
		<div class="card-columns mt-4" style="column-count: 4">
			<?php 
                $query = $this->db->get('users')->result_array();
                foreach ($query as $d){
                    echo'<div class="card bg-primary text-white border-dark shadow">';
                    echo'<img class="card-img-top ml-3 mt-3 mx-auto d-block rounded-circle" style="width: 100px;"
					src="'.base_url('assets/avatars_img/male.png').'" alt="Generic placeholder image">';
                    echo'<div class="card-body text-center ml-3 mt-3">';
                    echo'<h5>'.$d['name'].'</h5>';
					echo'<h6>Email:</h6>';
					echo '<h6>'.$d['email'].'</h6>';
					echo '<div class="card-footer">';
					echo'<button onclick="SetUser('.$d['user_id'].')" class="btn btn-dark" type="button">
					<a class="text-white" href="#'.$d['user_id'].'">Get Details</a></button>';
					echo'</div>';
                    echo'</div>';
                    echo'</div>';
                } 
            ?>
		</div>

		<div>
			<div class="row justify-content-center ">
				<div class="col m-1 bg-dark text-white" style="width: 50%;">
					<h1 class="text-center">User info</h1>
				</div>

				<div class="col m-1 bg-dark text-white" style="width: 50%;">
					<h1 class="text-center">User Activity Info</h1>
				</div>
			</div>
			<div>
				<?php

				for($i=0;$i< count($query);$i++)
				{
					echo'<div class="row" id="'.$query[$i]['user_id'].
					'"style="display: none">';
					echo '<div class="row m-1">';
					echo '<div class="col m-1 bg-dark text-white text-center justify-content-center" style="width: 50%;">';
					echo '<h2 class="mt-4">'.$query[$i]['name'].'</h2>';
					echo '<h5><u>Username:</u> '.$query[$i]['uname'].'</h5>';

					//for os
					$this->db->select('os');
					$this->db->from('user_session');
					$this->db->where('user_id',$query[$i]['user_id']);
					$this->db->group_by('os');
					$this->db->order_by('COUNT(os) DESC');
					$this->db->limit('1');
					$os=$this->db->get()->result_array();
					echo '<h5><u>Common OS:</u> </h5>';
					if(isset($os[0]['os'])) { 
						echo '<h5>'.strval($os[0]['os']).'</h5>';
					} 
					else { 
						echo '<h5>No data found!!</h5>'; 
					}

					//for ip
					$this->db->select('ipaddress');
					$this->db->from('user_session');
					$this->db->where('user_id',$query[$i]['user_id']);
					$this->db->group_by('ipaddress');
					$this->db->order_by('COUNT(ipaddress) DESC');
					$this->db->limit('1');
					$ip=$this->db->get()->result_array();
					echo '<h5><u>Common IP:</u> </h6>';
					if(isset($ip[0]['ipaddress'])) { 
						echo '<h5>'.strval($ip[0]['ipaddress']).'</h5>';
					} 
					else { 
						echo '<h5>No data found!!</h5>'; 
					}
					

					//for browser
					$this->db->select('browser');
					$this->db->from('user_session');
					$this->db->where('user_id',$query[$i]['user_id']);
					$this->db->group_by('browser');
					$this->db->order_by('COUNT(browser) DESC');
					$this->db->limit('1');
					$browser=$this->db->get()->result_array();
					echo '<h5><u>Preferred Browser:</u> </h5>';
					if(isset($browser[0]['browser'])) { 
						echo '<h5>'.strval($browser[0]['browser']).'</h5>';
					} 
					else { 
						echo '<h5>No data found!!</h5>'; 
					}
					
					echo '</div>';
					
					echo'<div class="col m-1 bg-dark text-white justify-content-center">';

					//find all sessions per user
					$this->db->select('id');
					$this->db->where('user_id',$query[$i]['user_id']);
					$unique_sessions = $this->db->get('user_session')->result_array();
					echo'<h5 class="mt-3">No.of Unique Sessions: '.count($unique_sessions).'</h5>';
					echo '<hr class="bg-white">';

					//turn list of session array to string
					$session_list = array();
					for($k=0;$k<count($unique_sessions);$k++){
						$session_list[$k] = $unique_sessions[$k]['id'];
					}

					//get unique page titles
					$this->db->select('title');
					$this->db->distinct();
					$this->db->where_in('id',implode(", ",$session_list));					
					$unique_titles = $this->db->get('user_activity')->result_array();
					//print_r($unique_titles);

					//count time and visit of each page
					for($x=0;$x<count($unique_titles);$x++){
						$this->db->select('SUM(active_time) AS total_time,
						SUM(number_times) AS total_visits');
						$this->db->where('title',strval($unique_titles[$x]['title']));
						$this->db->where_in('id',implode(", ",$session_list));
						$visit_time= $this->db->get('user_activity')->result_array();
						echo '<h5>Page: '.$unique_titles[$x]['title'].'</h5>';
						//echo '<h5>'.print_r($visit_time).'</h5>';
						echo '<h5>Visits: '.$visit_time[0]['total_visits'].' Times</h5>';
						echo '<h5>Time spent: '.round($visit_time[0]['total_time']/1000).' Seconds</h5>';
						echo '<hr class="bg-white">';
					}

					echo '</div>';
					echo '</div>';
					echo '</div>';
					
				}
				?>
			</div>
		</div>
	</div>
	<h5>
</div>

<script>

	// put user id list into javascript array
var userIdList = new Array();
<?php foreach($query as $key => $val){ ?>
    userIdList.push('<?php echo $val['user_id']; ?>');
<?php } ?>

	// only show the clicked user details when setuser button passes value z to this function 
	function SetUser(z) {
		var p = z;
		console.log(p);
		var i;
		for (i = 0; i < userIdList.length; i++) {

			if (userIdList[i] == z) {
				if (document.getElementById(z).style.display === "none") {
					document.getElementById(z).style.display = "block";
				}
			} else {
				if (document.getElementById(userIdList[i]).style.display === "block") {
					document.getElementById(userIdList[i]).style.display = "none";
				}
			}
		}
	}

</script>
