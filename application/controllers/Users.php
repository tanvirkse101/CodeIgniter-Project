<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$data['page_title'] = "homepage";
		$this->load->view('_Layout/home/header.php',$data);
		$this->load->view('user/homepage');
		$this->load->view('_Layout/home/footer.php');
	}

	public function registration()
	{
		$data['page_title'] = "Registration";
		$this->load->view('_Layout/home/header.php',$data);
		$this->load->view('user/registration');
		$this->load->view('_Layout/home/footer.php');
	}
	
	public function login()
	{
		$data['page_title'] = "Login";
		$this->load->view('_Layout/home/header.php',$data);
		$this->load->view('user/login');
		$this->load->view('_Layout/home/footer.php');
	}

}

