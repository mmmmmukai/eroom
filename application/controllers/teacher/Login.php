<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'Teacher_Abstract.php';

class Login extends Teacher_Abstract
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
            redirect('teacher/mypage');
            exit;
        }
        $this->load->view('teacher/login');
    }

    public function action()
    {
        $validate = $this->_check_teacher_login_validate();
        if(!$validate)
        {
            $this->load->view('teacher/login');

        } else {
            
            $is_teacher = $this->Teacher_teacher_model->is_teacher();

            if(empty($is_teacher))
            {
                $this->session->set_flashdata('error', 'もう一度メールアドレスもしくはパスワードをご確認ください。');
                $this->load->view('teacher/login');
            } else {
                $this->session->set_flashdata('alert', 'ログインしました。');
                $this->set_session_data('teacher', $is_teacher[0]);
                redirect('teacher/mypage');
            }
        }

    }

    private function _check_teacher_login_validate()
    {
        $this->form_validation->set_rules('email', 'メールアドレス', 'required');
        $this->form_validation->set_rules('password', 'パスワード', 'required');
        $this->form_validation->set_message('required', '%sは必須項目です。');
        $this->form_validation->set_error_delimiters('<div class="error_txt">', '</div>');
        return $this->form_validation->run();
    }
}