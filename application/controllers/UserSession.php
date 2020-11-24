<?php
defined('BASEPATH') or exit('No direct script access allowed');
class UserSession extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //load the Login Model
        $this->load->model('SessionModel', 'addsession');
    }
    //get data via ajax and update database
    public function set_active_time()
    {
        //getdatafromajaxcall
        $id = $this->input->post('id');
        $pageurl = $this->input->post('pageurl');
        $active_time = $this->input->post('timeSpentOnSite');
        //query to match id & url
        $this->db->where('id', $id);
        $this->db->where('pageurl', $pageurl);
        $query1 = $this->db->get('user_activity');
        //update database active time
        $this->db->set('active_time', "active_time+'$active_time'", FALSE);
        $this->db->where('id', $id);
        $this->db->where('pageurl', $pageurl);
        $this->db->update('user_activity');
    }
}
