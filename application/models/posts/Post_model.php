<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {

    public function get_posts(){

        $query = $this->db->get('post');    

        return $query->result();
    }

    public function find_detail($post_id){

        $query = $this->db->get_where('post', array('post_id'=> $post_id));

        return $query->row();
    }

    
}