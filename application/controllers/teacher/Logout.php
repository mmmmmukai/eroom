<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'Teacher_Abstract.php';

class Logout extends Teacher_Abstract
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->session->unset_userdata('teacher');
        $this->session->set_flashdata('alert', 'ログアウトしました。');
        redirect('/teacher/login/');
        exit;
    }

}