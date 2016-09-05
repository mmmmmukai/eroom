<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once 'user_abstract.php';

class Mypage extends User_Abstract
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->logged_check();
        $this->load->view('user/mypage');
    }

}