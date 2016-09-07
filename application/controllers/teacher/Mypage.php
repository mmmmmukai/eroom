<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once 'Teacher_Abstract.php';

class Mypage extends Teacher_Abstract
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        if($this->logged_check() == FALSE)
        {
            $this->session->set_flashdata('alert', 'まだログインしていません。');
            redirect('teacher/login');
            exit;
        }
        
        $teacher_session = $this->session->userdata('teacher');
        $res = $this->Teacher_teacher_model->get_userdata($teacher_session['id']);
        if(!array_key_exists(0, $res))
        {
            $this->session->set_flashdata('alert', 'セッション期限が切れました。もう一度ログインしてください。');
            redirect('teacher/login');
            exit;
        }

        $data['info'] = $res[0];
        
        $this->load->view('teacher/mypage', $data);
    }

}