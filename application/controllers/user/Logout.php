<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'User_Abstract.php';

class Logout extends User_Abstract
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->session->unset_userdata('user');
        $this->session->set_flashdata('alert', 'ログアウトしました。');
        redirect('/user/login/');
        exit;
    }

}