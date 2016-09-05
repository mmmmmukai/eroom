<?php
class Teacher_Abstract extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function logged_check()
    {
        $res = $this->session->userdata('teacher') ? TRUE : FALSE;

        return $res;
    }
}
