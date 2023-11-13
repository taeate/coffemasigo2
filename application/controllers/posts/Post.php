<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
    public function __construct(){
        parent::__construct();
        // $this->load->model('article/Post_model');
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session'); // 세션 라이브러리 로드
    }
    
    public function index(){

        $this->load->view('posts/post_list_view');
    
    }

    
}
?>