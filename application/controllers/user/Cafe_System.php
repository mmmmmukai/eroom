<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cafe_System extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('user/cafe_system');
    }
}