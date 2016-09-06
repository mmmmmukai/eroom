<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once 'User_Abstract.php';

class Mypage extends User_Abstract
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if($this->logged_check() == FALSE)
        {
            $this->session->set_flashdata('logged_msg', 'まだログインしていません。');
            redirect('user/login');
            exit;
        }
        $this->load->view('user/mypage');
    }

}