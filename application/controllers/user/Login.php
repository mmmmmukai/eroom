<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'User_Abstract.php';

class Login extends User_Abstract
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if($this->logged_check())
        {
            $this->session->set_flashdata('alert', 'すでにログインしています');
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
            $this->load->view('user/login');
        } else {
            $params['email'] = $this->input->post('email', TRUE);
            $params['password'] = $this->input->post('password', TRUE);
            $is_user = $this->User_user_model->is_user($params);

            if(empty($is_user))
            {
                $this->session->set_flashdata('error', 'もう一度メールアドレスもしくはパスワードをご確認ください。');
                $this->load->view('user/login');
            } else {
                $this->session->set_flashdata('alert', 'ログインしました。');
                $this->set_session_data('user', $is_user[0]);
                redirect('user/mypage');
            }
        }

    }

    private function _check_user_login_validate()
    {
        $this->form_validation->set_rules('email', 'メールアドレス', 'trim|required');
        $this->form_validation->set_rules('password', 'パスワード', 'trim|md5|required');
        $this->form_validation->set_message('required', '%sは必須項目です。');
        $this->form_validation->set_error_delimiters('<div class="error_txt">', '</div>');
        return $this->form_validation->run();
    }
}
