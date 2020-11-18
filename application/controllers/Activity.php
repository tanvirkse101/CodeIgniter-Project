<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
    }
	
	public function index()
	{	
		//send data and call master view
		
		$data['page_title'] = "Activity";
        $data['page'] = "user/activity";
		$this->load->view('_Layout/home/master.php',$data);
		
	}
}
