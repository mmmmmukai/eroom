<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'User_Abstract.php';

class User extends user_abstract
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index()
    {
        echo "hello user";
    }
}