<div class="jumbotron text-center bg-primary text-white border border-white rounded">
    <h1>Welcome User, You are successfully logged in. </h2>
    <h2><?php print_r($this->session->userdata); ?></h2>
    <div class="col-sm-4 text-center float-right">
        <a class="btn btn-danger" href="<?=base_url().'login/logout';?>">Logout</a>
    </div>
</div>