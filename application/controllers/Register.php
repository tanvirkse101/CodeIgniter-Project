<?php
class Register extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
        //load the required helpers and libraries
        $this->load->helper('url');
        $this->load->library(['form_validation', 'session']);
        $this->load->database();
        
        //load our Register model here
        $this->load->model('RegisterModel', 'register');
    }
    //registration form page
    public function index() {
        //check if the user is already logged in 
        //if yes redirect to the welcome page
        if ($this->session->userdata('logged_in')) {
            redirect(base_url() . 'welcome');
        }
        //load the register page views
        $data['page_title'] = "Registration";
		$this->load->view('_Layout/home/header.php',$data);
		$this->load->view('user/registration');
		$this->load->view('_Layout/home/footer.php');
    }
    //register validation and logic
    public function doRegister() {
        //set the form validation here
        $this->form_validation->set_rules('name', 'Name', 'required|min_length[3]');
        $this->form_validation->set_message('is_unique', 'Email already exists.');
        $this->form_validation->set_rules('uname', 'UniqueName', 'required|trim|is_unique[users.uname]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
        //if the above validation fails, redirect to register page
        //with vaildation_errors();
        if ($this->form_validation->run() == FALSE) {
            //set the validation errors in flashdata (one time session)
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url() . 'register');
        } else {
            //if not get the input values
            $name = $this->input->post('name');
            $uname = $this->input->post('uname');
            $email = $this->input->post('email');
            $password = sha1($this->input->post('password'));
            $data = [
                'name' => $name,'uname' => $uname, 'email' => $email, 'password' => $password, 'date_time' => date('Y-m-d H:i:s')
            ];
            //pass the input values to the register model
            $insert_data = $this->register->add_user($data);
            //if data inserted then set the success message and redirect to login page
            if ($insert_data) {
                $this->session->set_flashdata('msg', 'Successfully Register, Login now!');
                redirect(base_url() . 'login');
            }
        }
    }
}