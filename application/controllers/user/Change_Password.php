<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'User_Abstract.php';

class Change_Password extends User_Abstract
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if(!$this->logged_check())
        {
            $this->set_flashdata('error', 'ログインしていません');
            redirect('user/login');
        } else {
            $this->load->view('user/change_password');
        }
    }

    public function action()
    {
        if(!$this->logged_check())
        {
            $this->set_flashdata('error', 'ログインしていません');
            redirect('user/login');
        } else {

            if(!$this->_check_input_validate())
            {
                $this->load->view('user/change_password');
            } else {
                $params['id'] = $_SESSION['user']['id'];
                $params['old_password'] = $this->input->post('old_password', TRUE);
                $params['new_password'] = $this->input->post('new_password', TRUE);
                
                $res = $this->User_user_model->change_password($params);

                $this->session->set_flashdata('alert', $res['alert']);
                
                if($res)
                {
                    //更新成功
                    redirect('user/mypage');
                } else {
                    //更新失敗
                    redirect('user/login');
                }
            }
        }
    }

    private function _check_input_validate()
    {
        $this->form_validation->set_rules('old_password', '古いパスワード', 'trim|md5|required');
        $this->form_validation->set_rules('new_password', '新しいパスワード', 'trim|min_length[6]|alpha_numeric|md5|required');
        $this->form_validation->set_rules('new_password_confirm', '新しいパスワード', 'trim|md5|matches[new_password]|required');

        $this->form_validation->set_message('required', '%sは必須項目です。');
        $this->form_validation->set_message('min_length', '%sは短すぎます。6文字以上設定してください。');
        $this->form_validation->set_message('alpha_numeric', '%sに英数字以外の文字を入れないでください。');
        $this->form_validation->set_message('matches', '入力したパスワードと一致しません。');
        $this->form_validation->set_error_delimiters('<div class="error_txt">', '</div>');
        return $this->form_validation->run();
    }
}