<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_admin extends CI_Controller {
 
    public function __construct(){
		parent::__construct();
		$this->load->model('Fetch_record');
		$this->load->library("pagination");
		
	}
	
	public function index()
	{
		$data['webpage'] = "admin/login.php";
		$data['css_file']= array("login_css/login.css");
		$data['js_file'] = array("login_js/login.js");
		  
		$this->load->view('dashboard',$data);
	}
	
	public function admin_pannel(){
				
		$data['webpage'] = "main.php";
		$data['css_file']= array("");
		$data['js_file'] = array("");
		
		
		$this->load->view('dashboard_admin',$data);
		
	}
	
	
	public function load_users(){
		
		$data['webpage'] = "users_list.php";
		
		
		
		$config = array();
        $config["base_url"] = base_url() . "admin/Main_admin/load_users/";
        $config["total_rows"] = $this->Fetch_record->get_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 4;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		
        $data["links"] = $this->pagination->create_links();

        $data['user_detail'] = $this->Fetch_record->fetch_row($config["per_page"], $page);
		
		$this->load->view('dashboard_admin',$data);
		
		
	}
	
	
}
