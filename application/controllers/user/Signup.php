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
        //講師情報を出す
        // $data['teacher_datas'] = $this->Teacher_teacher_model->get_all_teachers_list();
        $this->load->view('user/signup/index');
    }

    public function confirm()
    {
        $validate = $this->_check_input_validate();
        if(!$validate)
        {
            $this->load->view('user/signup/index');
        } else {
            $params = $this->input->post();
            $res = $this->User_user_model->check_if_used_email($params);
            if($res == FALSE)
            {
                $this->session->set_flashdata('alert', 'このアカウントはすでに使われています。');
                $this->load->view('user/signup/index');
            } else {
                $this->session->set_userdata('register', $params);
                $this->load->view('user/signup/confirm');
            }
        }
    }

    public function complete()
    {
        $res = $this->User_user_model->insert_new_user($_SESSION['register']);
        //session内のパスワードを削除
        unset($_SESSION['register']['password']);
        if(!$res)
        {
            $this->session->set_flashdata('alert', '登録失敗です。もう一度お試しください。');
            redirect('user/signup');
        } else {
            $this->session->set_flashdata('alert', '登録成功です。ログインしてください。');
            redirect('user/login');
        }
    }

    private function _check_input_validate()
    {
        $this->form_validation->set_rules('email', 'メールアドレス', 'trim|valid_email|required');
        $this->form_validation->set_rules('password', 'パスワード', 'trim|min_length[6]|alpha_numeric|md5|required');
        $this->form_validation->set_rules('password_confirm', 'パスワード確認', 'trim|matches[password]|md5|required');
        $this->form_validation->set_message('required', '%sは必須項目です。');
        $this->form_validation->set_message('min_length', '%sは短すぎます。6文字以上設定してください。');
        $this->form_validation->set_message('alpha_numeric', '%sに英数字以外の文字を入れないでください。');
        $this->form_validation->set_message('valid_email', '正しいメールアドレスではありません。');
        $this->form_validation->set_message('matches', '入力したパスワードと一致しません。');
        $this->form_validation->set_error_delimiters('<div class="error_txt">', '</div>');
        return $this->form_validation->run();
    }
}
