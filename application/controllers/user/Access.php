<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Access extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('user/access');
    }
}