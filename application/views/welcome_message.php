<div class="jumbotron text-center bg-primary text-white border border-white rounded">
    <h1>Welcome User</h2>
    <h2><?php print_r($this->session->userdata); ?></h2>
    <h2><?php echo(session_id()); ?></h2>
    <h2><?php echo($this->session->userdata('id')); ?></h2>
</div>