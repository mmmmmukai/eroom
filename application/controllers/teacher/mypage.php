<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once 'teacher_abstract.php';

class Mypage extends Teacher_Abstract
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        if($this->logged_check() == FALSE)
        {
            redirect('teacher/login');
            exit;
        }
        
        $this->load->view('teacher/mypage');
    }

}