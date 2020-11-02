<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function index()
	{
		$this->load->view('user/homepage');
	}
	public function registration()
	{
		$this->load->view('user/registration');
	}
	public function login()
	{
		$this->load->view('user/login');
	}
}
