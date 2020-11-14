<?php
class SessionModel extends CI_Model{
    public function add_session($data){
        //get the data from controller and insert into the table 'users'
        return $this->db->insert('user_session', $data);
    }
    public function add_activity($data){
        //get the data from controller and insert into the table 'users'
        return $this->db->insert('user_activity', $data);
    }

    /*public function checksession($session_id) {
        //query the table 'user_session' and get the result count
        $this->db->where('session_id', $session_id);
        $result = $this->db->get('user_session')->result_array();
		
        // Let's check if there are any results
        if (count($result) == 1) {
            $user = array(
                'id' => $result[0]['id'],
            );
            $this->session->set_userdata($user);
            return count($result);
        }
        
    }
        $logged_in = $this->session->userdata('logged_in');
        if (!$logged_in) {
            redirect(base_url() . 'login');
        }*/
}