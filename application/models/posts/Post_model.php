<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {

    public function get_posts(){
      
        $this->db->select('*');
        $this->db->where('delete_status', FALSE);
        $this->db->where('parent_post_id', null);
        $query = $this->db->get('post');
        return $query->result();


    }
    

    public function find_detail($post_id){

        $query = $this->db->get_where('post', array('post_id'=> $post_id));

        return $query->row();
    }

    public function get_answer_posts() {

        $this->db->select('post.*, parent.title as parent_title');
        $this->db->from('post');
        $this->db->join('post as parent', 'post.parent_post_id = parent.post_id', 'left');
        $this->db->where('post.parent_post_id !=', NULL);
        $query = $this->db->get();
        return $query->result();
    }

    public function create_comment($post_id,$comment_content, $user_id) {

        $data = array(

        
            'comment_content' => $comment_content,
            'user_id' => $user_id,
            'post_id' => $post_id,
            'create_date' => date('Y-m-d H:i:s'),
          
        );

        $this->db->insert('comment', $data);
    
    }

    public function get_comment($post_id){

        $this->db->select('*');
        $this->db->from('comment');
        $this->db->where('post_id', $post_id);
        $this->db->order_by('create_date','ASC');

        $query = $this->db->get();

        // 쿼리 결과가 존재하면 결과 반환, 그렇지 않으면 빈 배열 반환
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }

    }

    public function count_comment($post_id){
        $this->db->where('post_id', $post_id);
        $this->db->from('comment');;
        return $this->db->count_all_results();
    }
}