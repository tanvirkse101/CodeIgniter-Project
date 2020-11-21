<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserActivity extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('SingleUserModel','user_data');
	}
	
	public function index()
	{
		$data['page_title'] = "UserActivity";
        $data['page'] = "user/useractivity";
		$this->load->view('_Layout/home/master.php',$data);
	}
}
