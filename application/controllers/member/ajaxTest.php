<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ajaxTest extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('member/ajaxTestModel');
        $this->load->database();
        $this->load->helper('url');
    }
	public function index(){

     $list['get_data'] = $this->ajaxTestModel->get_list();

     
     if ($_POST && isset($_POST['submit'])){

        $name = $this->input->post('name');
        $email = $this->input->post('email');

        $this->ajaxTestModel->set_data($name,$email);
        
       
        echo "<script>
            alert('생성완료')
            window.location = '/login';
            </script>";
    }

    $this->load->view('member/ajaxTest_view', $list);
}
public function checkName()
{
    $name = $this->input->post('name');

    $result = $this->ajaxTestModel->get_name($name);
    
   
    if (!empty($result)) {
        echo "unavailable";
    } else {
        echo "available";
    }
}

public function checkEmail()
{
    $email = $this->input->post('email');
    $result = $this->ajaxTestModel->get_email($email);
    
    if (count($result) > 0) {
        echo "unavailable";
    } else {
        echo "available";
    }
}

public function memberDelete() {

    $this->ajaxModel->delete_member();
}


}
