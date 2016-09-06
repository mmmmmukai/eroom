<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'teacher_abstract.php';

class Logout extends Teacher_Abstract
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->session->unset_userdata('teacher');
        redirect('/teacher/login/');
        exit;
    }

}