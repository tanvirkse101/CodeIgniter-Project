<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UserSession extends CI_Controller {
    public function __construct() {
        parent::__construct();
        //load the Login Model
        $this->load->model('SessionModel', 'addsession');
    }

    public function set_user_session(){
        $session_id = session_id();
        $user_id = $this->session->userdata('user_id');
        $ipaddress = $this->session->userdata('ipaddress');
        $os = $this->session->userdata('os');
        $browser = $this->session->userdata('browser');
        $session_data = [
            'session_id' => $session_id, 'user_id' => $user_id, 'ipaddress' => $ipaddress, 'os' => $os, 'browser' => $browser
        ];
            
        $this->addsession->add_session($session_data);
    }

    public function set_user_activity(){
        $page_title = $this->session->userdata('page_title');
        $page_url = $this->session->userdata('page_url');
        $activity_data = [
            'title' => $page_title, 'pageurl' => $page_url
        ];
        $this->addsession->add_activity($activity_data);

    }
}