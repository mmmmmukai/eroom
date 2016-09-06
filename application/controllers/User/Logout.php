<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'user_abstract.php';

class Logout extends User_Abstract
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->session->unset_userdata('user');
        redirect('/user/login/');
        exit;
    }

}