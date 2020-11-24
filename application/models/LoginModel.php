<?php
class LoginModel extends CI_Model
{
    public function checkLogin($email, $password)
    {
        //query the table 'users' and get the result count
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        //$query = $this->db->get('users');

        $result = $this->db->get('users')->result_array();

        // Let's check if there are any results
        if (count($result) == 1) {
            // If there is a user, then create session data
            $this->session->sess_regenerate();
            $user = array(
                'user_id' => $result[0]['user_id'],
                'email' => $result[0]['email'],
                'uname' => $result[0]['uname'],
                'name' => $result[0]['name'],
            );
            $this->session->sess_regenerate();
            $this->session->set_userdata($user);
            return count($result);
        }
    }
}
