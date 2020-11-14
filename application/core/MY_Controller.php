<?php
class MY_Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('SessionModel', 'addsession');

        $session_id = session_id();
        $user_id = $this->session->userdata('user_id');
        $page_title = $this->session->userdata('page_title');
        $ipaddress = $this->session->userdata('ipaddress');
        $os = $this->session->userdata('os');
        $browser = $this->session->userdata('browser');
        $page_url = $this->session->userdata('page_url');

        $session_data = [
            'session_id' => $session_id, 'user_id' => $user_id, 'ipaddress' => $ipaddress, 'os' => $os, 'browser' => $browser
        ];        
        $this->db->where('session_id', $session_id);
        $query = $this->db->get('user_session');
        if(!$query->num_rows()){
            $this->addsession->add_session($session_data);
            $id = $this->db->insert_id();
            $this->session->set_userdata('id',$id);
        }
        $id = $this->session->userdata('id');
        $activity_data = [
            'title' => $page_title, 'pageurl' => $page_url, 'id' => $id
        ];
        $this->addsession->add_activity($activity_data);

    }
}
