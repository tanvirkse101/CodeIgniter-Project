<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['page_title'] = "Blog";
		$data['page'] = "dummypages/blog";
		$this->load->view('_Layout/home/master.php', $data);
	}
}
