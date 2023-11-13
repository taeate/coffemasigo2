<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ajaxTestModel extends CI_Model {
    public function get_list() {

        $query = $this->db->get('user');
 
         return $query->result();
     }

     public function get_name($name) {
        $this->db->where('name', $name);
        $query = $this->db->get('user');
        return $query->result();
    }
    

    public function get_email($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('user');
        return $query->result();
    }

    public function set_data($name,$email) {

        $data = array(
            'name'=> $name,
            'email'=> $email
        );

        $this->db->insert('user', $data);
    }
    
    
}
