<?php
class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function set_session_data($session_name, $data)
    {
        $this->session->set_userdata($session_name,$data);
    }
}
