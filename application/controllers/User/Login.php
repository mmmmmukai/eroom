<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'User_Abstract.php';

class Login extends User_Abstract
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if($this->logged_check())
        {
            $this->session->set_flashdata('logged_msg', 'すでにログインしています');
            redirect('user/mypage');
            exit;
        }
        $this->load->view('user/login');
    }

    public function action()
    {
        $validate = $this->_check_user_login_validate();
        if(!$validate)
        {
            $this->load->view('user_login');
        } else {
            $is_user = $this->User_user_model->is_user();

            if(empty($is_user))
            {
                $this->session->set_flashdata('login_error_msg', 'もう一度メールアドレスもしくはパスワードをご確認ください。');
                $this->load->view('user/login');
            } else {
                $this->session->set_flashdata('logged_msg', 'ログインしました。');
                $this->set_session_data('user', $is_user[0]);
                redirect('user/mypage');
            }
        }

    }

    private function _check_user_login_validate()
    {
        $this->form_validation->set_rules('email', 'メールアドレス', 'required');
        $this->form_validation->set_rules('password', 'パスワード', 'required');
        $this->form_validation->set_message('required', '%sは必須項目です。');
        $this->form_validation->set_error_delimiters('<div class="error_txt">', '</div>');
        return $this->form_validation->run();
    }
}