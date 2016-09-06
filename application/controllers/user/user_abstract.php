<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_Abstract extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_user_model');
    }

    public function logged_check()
    {
        $res = $this->session->userdata('user') ? TRUE : FALSE;

        return $res;
    }
}
