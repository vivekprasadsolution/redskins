<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_ci extends CI_Controller {
 
    public function __construct(){
		parent::__construct(); 
	}
	
	public function index()
	{ 
		$data['webpage'] = "main/form.php";
		$data['css_file']= array("normalize.css","main.css");
		$data['js_file'] = array("vendor/modernizr-2.8.3.min.js");
		  
		  
		  
		if($this->input->post('getregisterd') == 'Submit'){

		$fname = $this->input->post('registration[primaryGuest][firstName]');
			$lname = $this->input->post('registration[primaryGuest][lastName]');
			$email = $this->input->post('registration[primaryGuest][email]');
			$zip   = $this->input->post('registration[primaryGuest][zipCode]');
			$no_guest = $this->input->post('registration[noOfGuests]');
			$season_tkt = $this->input->post('registration[primaryGuest][subscriptions][seasonTicketWaitlist]');
			$women_club = $this->input->post('registration[primaryGuest][subscriptions][womensClub]');
			$offers = $this->input->post('registration[primaryGuest][subscriptions][offers]');
			$saluteMilitaryAppreciationClub = $this->input->post('registration[primaryGuest][subscriptions][saluteMilitaryAppreciationClub]');
			$token = $this->input->post('registration[_token]');	
			
		   $season_tkt = $season_tkt == '' ? 0:1;
		   $women_club = $women_club == '' ? 0:1;
		   $offers = $offers == '' ? 0:1;
		   $saluteMilitaryAppreciationClub = $saluteMilitaryAppreciationClub == '' ? 0:1;
			
			$data['users'] = array('fname'=>$fname,
						   'lname'=>$lname,
						   'email'=>$email,
						   'zip'=>$zip,
						   'no_of_guests'=>$no_guest,
						   'season_tkt'=>$season_tkt,
						   'women_club'=>$women_club,
						   'offers'=>$offers,
						   'saluteMilitaryAppreciationClub'=>$saluteMilitaryAppreciationClub,
						   'token'=>$token
			);
				 
				 
			$data['guests']=  $this->input->post('registration[guests]');
			
			
		  
			
		 	$this->db->trans_start(); 
		  	$this->db->trans_strict(FALSE);

			$this->db->insert('users_records', $data['users']);
			
			if(isset($data['guests'])){
				foreach($data['guests'] as $value){
					echo $value['firstName'];
					$SQLtxt = "INSERT INTO users_records(fname,lname,email,season_tkt,women_club,offers,saluteMilitaryAppreciationClub)VALUES('". $value['firstName'] ."','". $value['lastName'] ."','". $value['email'] ."',". $season_tkt .",". $women_club .",". $offers .",". $saluteMilitaryAppreciationClub .")";
					$this->db->query($SQLtxt);
					
					
					
				}
			}
			
			$this->db->trans_complete(); 

 
			if ($this->db->trans_status() === FALSE) {
			 
				$this->db->trans_rollback();
				//return FALSE;
			
			}else {
				 
				$this->db->trans_commit();
				//return TRUE;
				
				create_booking_email($email,$fname ." ". $lname);
			
				if(isset($data['guests'])){
					foreach($data['guests'] as $value){
						create_booking_email($value['email'],$value['firstName'] ." ". $value['lastName']);
					}
				}
				
				
			} 
			
			
			 
		} 
		
		
		
		$this->load->view('dashboard',$data);
	}
	
	/* 
	public function send_email_view(){
		$this->load->view('email_template');
	} */
	
	public function login(){
		redirect('Admin/Main_admin');
	}
	
}
