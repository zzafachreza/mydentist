<?php

class Login extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Login_model');
    }

    function index(){
        
        $sql = "SELECT * FROM data_company limit 1";
         $dataCom = $this->db->query($sql);
         $data['company'] = $dataCom->result_array();

        $data['title'] = 'FM | Login';
        $this->load->view('header',$data);
        $this->load->view('login');
        
     
    }
    
      function splash(){
        
        $sql = "SELECT * FROM data_company limit 1";
         $dataCom = $this->db->query($sql);
         $data['company'] = $dataCom->result_array();

        $this->load->view('header',$data);
        $this->load->view('splash');
        
     
    }

    function validasi(){
        
        // print_r($_POST);

       $username = $this->input->post('username');
        $password = sha1($this->input->post('password'));

        $hasil = $this->db->query("SELECT * FROM data_pengguna WHERE username='$username' AND password='$password'");

        if ($hasil->num_rows()>0) {
            # code...
             $i = $hasil->row_array();

    
           
             $_SESSION['id'] = $i['id'];
             $_SESSION['username'] = $i['username'];
            $_SESSION['nama_lengkap'] = $i['nama_lengkap'];
            

                      
           	redirect('./');
        }
        else{
            $this->session->set_flashdata('error', 'username atau Password Salah !');
        	redirect('login');
        }
       





    }

    function logout(){

        unset($_SESSION['username']);
        unset($_SESSION['level']);
        session_destroy(); 

         redirect('login');


    }
}