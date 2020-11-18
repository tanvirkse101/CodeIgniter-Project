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
}