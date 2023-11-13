<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {

    public function get_posts(){

        $query = $this->db->get('posts');    

        return $query->result();
    }

    public function where_posts($id){

        $query = $this->db->get_where('posts',array('id'=> $id));

        return $query->row();
    
    }
    
}