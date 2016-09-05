<?php
class User_Abstract extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function logged_check()
    {
        $res = $this->session->userdata('user') ? TRUE : FALSE;

        return $res;
    }
}
