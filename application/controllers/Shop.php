<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shop extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['page_title'] = "Shop";
		$data['page'] = "dummypages/shop";
		$this->load->view('_Layout/home/master.php', $data);
	}
}
