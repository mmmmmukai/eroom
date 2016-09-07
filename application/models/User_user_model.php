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

    public function check_if_fulfill_conditions($params)
    {
        $email = $this->input->post('email', TRUE);
        $password = $this->input->post('password', TRUE);

        $uniqueless_sql = <<<EOF
        SELECT id FROM user WHERE email='{$email}'
EOF;
        $uniqueless = $this->db->query($uniqueless_sql)->result_array();

        if(!empty($uniqueless))
        {
            $res['result'] = FALSE;
            $res['alert'] = 'このアカウントはすでに使われています。';
        } else {
            //パスワードチェック
            $res['result'] = TRUE;
        }

        return $res;
    }

}