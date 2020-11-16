  
<?php
  //Get userinfo for session
  $user = array(
    'page_title' => $page_title,
    'ipaddress'  => $this->input->ip_address(),
    'os'         => $this->agent->platform(),
    'browser'    => $this->agent->browser(),
    'page_url'   => current_url()
  );
  $this->session->set_userdata($user);
  
  $this->load->view("_Layout/home/header.php");
  $this->load->view($page);
  $this->load->view("_Layout/home/footer.php");
  $this->load->library('user_agent');
?>