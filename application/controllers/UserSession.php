<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UserSession extends CI_Controller {
    public function __construct() {
        parent::__construct();
        //load the Login Model
        $this->load->model('SessionModel', 'addsession');
    }

    public function set_active_time() {

        $id = $this->input->post('id');
        $pageurl = $this->input->post('pageurl');
        $active_time = $this->input->post('timeSpentOnSite');

        $this->db->where('id', $id);
        $this->db->where('pageurl', $pageurl);
        $query1 = $this->db->get('user_activity');

   
            $this->db->set('active_time', "active_time+'$active_time'", FALSE);
            $this->db->where('id', $id);
            $this->db->where('pageurl', $pageurl);
            $this->db->update('user_activity');
    }

}