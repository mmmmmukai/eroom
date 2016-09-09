<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Access extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('user/access');
    }
}