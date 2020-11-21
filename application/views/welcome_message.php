<div class="container border" style="height: 100vh;">
	<div class="jumbotron text-center bg-dark text-white border border-white rounded">
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
</div>