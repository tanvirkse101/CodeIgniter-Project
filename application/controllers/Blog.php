<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        //load the Login Model
        $this->load->model('SessionModel', 'addsession');
    }
	public function index()
	{
		$data['page_title'] = "Blog";
        $data['page'] = "dummypages/blog";
		$this->load->view('_Layout/home/master.php',$data);
	}
}
