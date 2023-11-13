<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    
    // 사용자 인증
    public function authenticate($user_id, $password) {
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('user');

        if ($query->num_rows() == 1) {
            $user_data = $query->row();
            if (password_verify($password, $user_data->password_hash)) {
                // 비밀번호가 일치하면 사용자 정보를 반환
                return $user_data;
            }
        }
        return false; // 사용자 정보가 없거나 비밀번호가 일치하지 않는 경우
    }
}


?>