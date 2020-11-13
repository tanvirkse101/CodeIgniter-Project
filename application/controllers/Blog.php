<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	
	public function index()
	{
		$data['page_title'] = "Blog";
        $data['page'] = "dummypages/blog";
		$this->load->view('_Layout/home/master.php',$data);
	}
}
