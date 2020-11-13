<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function index()
	{
		$data['page_title'] = "shop";
        $data['page'] = "dummypages/shop";
		$this->load->view('_Layout/home/master.php',$data);
	}
}
