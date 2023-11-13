<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    
     // 사용자 인증
     public function authenticate($auth_data) {
        // 데이터베이스에서 사용자 아이디로 사용자 검색
        $query = $this->db->get_where('user', array('user_id' => $auth_data['user_id']));
        $user = $query->row();

        // 사용자가 존재하고 비밀번호가 맞는지 확인
        if ($user && password_verify($auth_data['password'], $user->password_hash)) {
            // 비밀번호가 맞으면 사용자 데이터 반환
            return $user;
        } else {
            // 사용자가 없거나 비밀번호가 틀린 경우 FALSE 반환
            return FALSE;
        }
    }


    
}


?>