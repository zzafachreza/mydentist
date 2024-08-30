<?php

class Register extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	function index(){

        
        $sql = "SELECT * FROM data_company limit 1";
   $dataCom = $this->db->query($sql);
         $data['company'] = $dataCom->result_array();

        $data['title'] = 'FM | Login';
        $this->load->view('header',$data);
			$this->load->view('register');
			$this->load->view('footer');
		}
	
		
	
	function insert(){
	    
	    
	    $username = $_POST['username'];
        $nama_lengkap = $_POST['nama_lengkap'];
      
        $password = sha1($_POST['password']);
        
        
        $sql="INSERT INTO data_pengguna(
            username,
            nama_lengkap,
           
            password
            
            ) VALUES(
                
                '$username',
                '$nama_lengkap',
               
                '$password'
                )";
                
                if($this->db->query($sql)){
                                     $this->session->set_flashdata('update', ' Registrasi Pengguna Baru Berhasil !');
                    	redirect('login');
                }
	    
	}
	
	}

?>