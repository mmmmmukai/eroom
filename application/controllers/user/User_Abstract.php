<?php
class User_Abstract extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_user_model');
        $this->load->model('Teacher_teacher_model');
    }

    public function logged_check()
    {
        $res = $this->session->userdata('user') ? TRUE : FALSE;

        return $res;
    }
}
