<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'User_Abstract.php';

class Signup extends User_Abstract
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
            $this->session->set_flashdata('alert', 'すでにアカウントを持っています。');
            redirect('user/mypage');
            exit;
        }
        $this->load->view('user/signup');
    }

    public function confirm()
    {
        $validate = $this->_check_input_validate();
        if(!$validate)
        {
            $this->load->view('user/signup');
        } else {
            $params = $this->input->post();
            $res = $this->User_user_model->check_if_fulfill_conditions($params);
            if($res['result'] == FALSE)
            {
                $this->session->set_flashdata('alert', $res['alert']);
                $this->load->view('user/signup');
            }
        }
    }

    private function _check_input_validate()
    {
        $this->form_validation->set_rules('email', 'メールアドレス', 'valid_email|required');
        $this->form_validation->set_rules('password', 'パスワード', 'min_length[8]|alpha_numeric|required');
        $this->form_validation->set_message('required', '%sは必須項目です。');
        $this->form_validation->set_message('min_length', '%sは短すぎます。8文字以上設定してください。');
        $this->form_validation->set_message('alpha_numeric', '%sに英数字以外の文字を入れないでください。');
        $this->form_validation->set_message('valid_email', '正しいメールアドレスではありません。');
        $this->form_validation->set_error_delimiters('<div class="error_txt">', '</div>');
        return $this->form_validation->run();
    }
}
