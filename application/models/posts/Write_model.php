<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Write_model extends CI_Model {

    public function set_article($title, $content, $user_id) {

        $data = array(
            'title'=> $title,
            'content'=> $content,
            'user_id' => $user_id,
            'delete_status' => FALSE
        );

        $this->db->insert('post', $data);
    }

    public function get_post($post_id) {

        $query = $this->db->get_where('post',array('post_id'=> $post_id));

       return $query->row();
    }

    public function save_reply($title, $content, $user_id, $parent_post_id) {

        $data = array(

            'title' => $title,
            'content' => $content,
            'user_id' => $user_id,
            'parent_post_id' => $parent_post_id,
            'create_date' => date('Y-m-d H:i:s'),
          
        );

        $this->db->insert('post', $data);
    }

    public function get_before_post($post_id) {
        $query = $this->db->get_where('post', array('post_id' => $post_id));
        
        return $query->row();
    }

    public function edit_post($post_id, $title, $content){

        $this->db->where('post_id', $post_id);

        $data = array(
            'title'=> $title,
            'content'=> $content
            );

        $this->db->update('post', $data);
        
    } 
     public function delete_post($post_id){

        $data = array('delete_status' => TRUE);

        $this->db->where('post_id', $post_id);
        $this->db->update('post', $data);
      
        
    }
    
}