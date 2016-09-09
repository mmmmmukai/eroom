<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'User_Abstract.php';

class User extends User_Abstract
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
}