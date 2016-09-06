<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_user_model extends MY_Model {

    public function is_user()
    {
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));

        $sql = <<<EOF
        SELECT id FROM user WHERE email='{$email}' AND password='{$password}' AND delete_flg=0
EOF;
        
        $res = $this->db->query($sql)->result_array();
        
        return $res;
    }
}