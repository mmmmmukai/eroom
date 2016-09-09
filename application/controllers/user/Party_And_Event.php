<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Party_And_Event extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('user/party_and_event');
    }
}