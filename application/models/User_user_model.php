<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_user_model extends MY_Model {

    public function is_user($params)
    {
        $data[] = $params['email'];
        $data[] = $params['password'];
        $sql = <<<EOF
            SELECT id FROM user WHERE email=? AND password=? AND delete_flg=0
EOF;
        
        $res = $this->db->query($sql,$data)->result_array();
        
        return $res;
    }

    public function check_if_used_email($params)
    {
        $email = $params['email'];

        $uniqueless_sql = <<<EOF
            SELECT id 
            FROM user 
            WHERE email = '{$email}'
EOF;
        $uniqueless = $this->db->query($uniqueless_sql)->result_array();

        $res = (empty($uniqueless)) ? TRUE : FALSE;

        return $res;
    }

    public function insert_new_user($params)
    {
        $data[] = $params['email'];
        $data[] = $params['password'];
        $sql = <<<EOF
            INSERT INTO `user` (`email`,`password`) 
            VALUES(?,?)
EOF;
        $res = ($this->db->query($sql, $data)) ? TRUE : FALSE;
        return $res;
    }

    public function change_password($params)
    {
        $user_id = $params['id'];
        $old_password = $params['old_password'];
        $new_password = $params['new_password'];

        $matching_sql = <<<EOF
            SELECT id 
            FROM user 
            WHERE id = '{$user_id}' 
            AND password = '{$old_password}'
EOF;
        $matching_query = (empty($this->db->query($matching_sql)->result_array())) ? TRUE : FALSE;

        if($matching_query){
            $ret['res'] = FALSE;
            $res['alert'] = 'パスワードは一致していません。';
        } else {
            $change_sql = <<<EOF
                UPDATE user
                SET user.password = '{$new_password}'
                WHERE user.id = '{$user_id}'
EOF;
            $change_query = ($this->db->query($change_sql)) ? TRUE : FALSE;

            //更新成功
            if($change_query)
            {
                $ret['res'] = TRUE;
                $res['alert'] = 'パスワードは更新成功。';
            } else {
                $ret['res'] = FALSE;
                $res['alert'] = 'パスワードは更新失敗。';
            }
        }

        return $res;
    }

}