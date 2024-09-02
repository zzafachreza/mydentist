<?php

class Home extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	function index(){

		if (!isset($_SESSION['username'])) {
			redirect('login/splash');
		}else{
			$data['title']='Fachreza Maulana | Home';
			$this->load->view('header',$data);
			$this->load->view('home');
			$this->load->view('footer');
		}
	}
	function menu(){

		if (!isset($_SESSION['username'])) {
			redirect('login');
		}else{
					$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('footer');
		}
	}
	
	function inc(){

		if (!isset($_SESSION['username'])) {
			redirect('login');
		}else{
		    
		    $data['comp'] = $this->db->query("SELECT * FROM data_company limit 1")->row_object();
		    
					$this->load->view('header',$data);
			$this->load->view('inc');
			$this->load->view('footer');
		}
	}
	
		function can(){

		if (!isset($_SESSION['username'])) {
			redirect('login');
		}else{
		    
		    $data['comp'] = $this->db->query("SELECT * FROM data_company limit 1")->row_object();
		    
					$this->load->view('header',$data);
			$this->load->view('can');
			$this->load->view('footer');
		}
	}
	
		function pre(){

		if (!isset($_SESSION['username'])) {
			redirect('login');
		}else{
		    
		    $data['comp'] = $this->db->query("SELECT * FROM data_company limit 1")->row_object();
		    
					$this->load->view('header',$data);
			$this->load->view('pre');
			$this->load->view('footer');
		}
	}
	
		function pre1(){

		if (!isset($_SESSION['username'])) {
			redirect('login');
		}else{
		    
		    $data['comp'] = $this->db->query("SELECT * FROM data_company limit 1")->row_object();
		    
					$this->load->view('header',$data);
			$this->load->view('pre1');
			$this->load->view('footer');
		}
	}
	
		function pre2(){

		    $data['comp'] = $this->db->query("SELECT * FROM data_company limit 1")->row_object();
			$this->load->view('header',$data);
			$this->load->view('pre2');
			$this->load->view('footer');
		
	}
	
			function pre3(){

		    $data['comp'] = $this->db->query("SELECT * FROM data_company limit 1")->row_object();
			$this->load->view('header',$data);
			$this->load->view('pre3');
			$this->load->view('footer');
		
	}
	
			function pre4(){

		    $data['comp'] = $this->db->query("SELECT * FROM data_company limit 1")->row_object();
			$this->load->view('header',$data);
			$this->load->view('pre4');
			$this->load->view('footer');
		
	}
	
			function pre5(){

		    $data['comp'] = $this->db->query("SELECT * FROM data_company limit 1")->row_object();
			$this->load->view('header',$data);
			$this->load->view('pre5');
			$this->load->view('footer');
		
	}
				function pre6(){

		    $data['comp'] = $this->db->query("SELECT * FROM data_company limit 1")->row_object();
			$this->load->view('header',$data);
			$this->load->view('pre6');
			$this->load->view('footer');
		
	}
	
		function mol(){

		if (!isset($_SESSION['username'])) {
			redirect('login');
		}else{
		    
		    $data['comp'] = $this->db->query("SELECT * FROM data_company limit 1")->row_object();
		    
					$this->load->view('header',$data);
			$this->load->view('mol');
			$this->load->view('footer');
		}
	}
	

			function molpilih(){

		if (!isset($_SESSION['username'])) {
			redirect('login');
		}else{
		    
		    $data['comp'] = $this->db->query("SELECT * FROM data_company limit 1")->row_object();
		    
					$this->load->view('header',$data);
			$this->load->view('molpilih');
			$this->load->view('footer');
		}
	}
	

			function molmenu(){

		    $data['comp'] = $this->db->query("SELECT * FROM data_company limit 1")->row_object();
			$this->load->view('header',$data);
			$this->load->view('molmenu');
			$this->load->view('footer');
		
	}
	
		 function moldetail(){

		    $data['comp'] = $this->db->query("SELECT * FROM data_company limit 1")->row_object();
			$this->load->view('header',$data);
			$this->load->view('moldetail');
			$this->load->view('footer');
		
	}
	
			 function can1(){

		    $data['comp'] = $this->db->query("SELECT * FROM data_company limit 1")->row_object();
			$this->load->view('header',$data);
			$this->load->view('can1');
			$this->load->view('footer');
		
	}
	
		 function can2(){

		    $data['comp'] = $this->db->query("SELECT * FROM data_company limit 1")->row_object();
			$this->load->view('header',$data);
			$this->load->view('can2');
			$this->load->view('footer');
		
	}
	
		 function can3(){

		    $data['comp'] = $this->db->query("SELECT * FROM data_company limit 1")->row_object();
			$this->load->view('header',$data);
			$this->load->view('can3');
			$this->load->view('footer');
		
	}

			 function can4(){

		    $data['comp'] = $this->db->query("SELECT * FROM data_company limit 1")->row_object();
			$this->load->view('header',$data);
			$this->load->view('can4');
			$this->load->view('footer');
		
	}
			 function can5(){

		    $data['comp'] = $this->db->query("SELECT * FROM data_company limit 1")->row_object();
			$this->load->view('header',$data);
			$this->load->view('can5');
			$this->load->view('footer');
		
	}

	
	function map(){

	
			$this->load->view('map');
		
	}
}