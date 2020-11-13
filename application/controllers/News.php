<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		$data['page_title'] = "News";
        $data['page'] = "dummypages/news";
		$this->load->view('_Layout/home/master.php',$data);
	}
}
