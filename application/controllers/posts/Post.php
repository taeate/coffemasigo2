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
    

    public function detail($post_id){

        if (!empty($post_id)){

            $detail_info  = $this->Post_model->find_detail($post_id);

            if ($detail_info){

                $data['detail_info'] = $detail_info;

                $this->load->view('posts/post_detail_view',$data);

            } else {

                echo "찾지못함";
            }
        }
    }

    
    
}
?>