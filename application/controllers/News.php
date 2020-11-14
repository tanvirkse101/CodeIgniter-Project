<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
        parent::__construct();
        //load the Login Model
        $this->load->model('SessionModel', 'addsession');
    }
	public function index()
	{
		$data['page_title'] = "News";
        $data['page'] = "dummypages/news";
		$this->load->view('_Layout/home/master.php',$data);
	}
}
