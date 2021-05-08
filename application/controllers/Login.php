<?php

class Login extends CI_Controller {

    public function __construct(){

            parent::__construct();
                $this->load->helper('url');
            $this->load->library('session');

    }

    public function index()
    {
        $this->load->view("login.php");
    }

    function login_user(){ 
        
        $name = $this->input->post('user_name');
        $pass = $this->input->post('user_password');
        
        $auth_check = "public/note/auth.txt";
        $lines = file($auth_check);
        $lines[0] = substr_replace($lines[0], "", -2);
        if($lines[0] == $name && $lines[1] == $pass)
        {
            $this->session->set_userdata('user_id',1);
            $this->session->set_userdata('user_name',$lines[0]);
            redirect('/', 'refresh');
            die;
        }
        else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->session->sess_destroy();
        $this->load->view("login.php");
        }
    }
}
?>