<?php
class SingleUserModel extends CI_Model{
    public function add_user($data){
        //get the data from controller and insert into the table 'users'
        return $this->db->insert('users', $data);
    }
    public function add_userinfo($data){
        //get the data from controller and insert into the table 'users'
        return $this->db->insert('userinfo', $data);
    }
}