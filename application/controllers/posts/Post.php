<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('posts/Post_model');
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session'); // 세션 라이브러리 로드
    }
    
    public function index() {
        
        $data['get_list'] = $this->Post_model->get_posts();

        $data['get_answer_list'] = $this->Post_model->get_answer_posts();
    
        $this->load->view('posts/post_list_view', $data);
    }
    

    public function detail($post_id) {
        $data = array();
    
        if (!empty($post_id)) {

            // 댓글수
            $data['comments_count'] = $this->Post_model->count_comment($post_id);

            // 게시물 세부 정보 가져오기
            $detail_info  = $this->Post_model->find_detail($post_id);
            if ($detail_info) {
                $data['detail_info'] = $detail_info;
            } else {
                echo "찾지 못함";
                return; 
            }
    
            // 댓글 정보 가져오기
            $comments = $this->Post_model->get_comment($post_id);
            $data['comment_info'] = $comments;
        }
    
        // 댓글 저장
        if ($this->input->post()) {
            $comment_content = $this->input->post('comment');
            $user_id = $this->session->userdata('user_id');
            $this->Post_model->create_comment($post_id, $comment_content, $user_id);
    
            // 페이지 새로고침 또는 리디렉트
            redirect('posts/free/'.$post_id); // 상세 페이지로 리디렉트하여 새 댓글 표시
        }
    
        // 최종적으로 단일 뷰 로드
        $this->load->view('posts/post_detail_view', $data);
    }
    
    
    
}
?>