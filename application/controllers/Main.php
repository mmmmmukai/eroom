<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
//if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('user/index');
    }
}