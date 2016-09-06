<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teacher_teacher_model extends MY_Model {

    public function is_teacher()
    {
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));

        $sql = <<<EOF
        SELECT id FROM Teacher WHERE email='{$email}' AND password='{$password}' AND delete_flg=0
EOF;
        
        $res = $this->db->query($sql)->result_array();
        
        return $res;
    }

    public function get_userdata($teacher_id)
    {
        $sql = <<<EOF
        SELECT id,email,name,language FROM Teacher WHERE id='{$teacher_id}'
EOF;
        $res = $this->db->query($sql)->result_array();

        return $res;
    }
}