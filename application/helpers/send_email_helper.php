<?php 
defined('BASEPATH') OR exit('No direct script access allowed');



if ( ! function_exists('create_booking_email')){
   function create_booking_email($email_id,$name){
       //get main CodeIgniter object
       $ci =& get_instance();
       $ci->load->library('email'); 
       
       $email =  $email_id;
       
       $type ="";
       $message = "Thank You for Contacting us $name";
        
        
        $ci->email->set_newline("\r\n");

		$config['protocol'] = 'smtp';
		//$config['smtp_host'] = 'smtp.gmail.com'; 
		$config['smtp_host'] = '';
		$config['smtp_port']    = '';
        $config['smtp_timeout'] = '';  
		$config['smtp_user'] = '';
		$config['_smtp_auth'] = TRUE;
		$config['smtp_pass'] = ''; 
		
		$config['mailtype']  = 'html';
		$config['charset']   = 'iso-8859-1';
   
		$config['smtp_from_name'] = 'DASDAK';

		$config['wordwrap'] = TRUE;
		$config['newline'] = "\r\n";
		$config['mailtype'] = 'html';  
		$config['smtp_timeout'] = '5';  
		$config['charset']    = 'utf-8'; 
		$config['validation'] = true; // bool whether to validate email or not
		$config['send_multipart']= TRUE;
			 
        $ci->email->initialize($config);

        $ci->email->from($config['smtp_user'],$config['smtp_from_name']);
   
		$ci->email->to($email);
        
        $ci->email->cc('herntek@gmail.com');
        $ci->email->bcc('herntek@gmail.com');
        $ci->email->subject($type);
       
        $ci->email->set_mailtype("html");
 
    
        $ci->load->helper('path');
        //$path = set_realpath('./image/');
        
        //$ci->email->attach($path. '/logo_249x62.jpg'); 
        
        $data['name'] = $name;
        
            $ci->email->message($ci->load->view('email_template',$data,true));
       
		if(!$ci->email->send()){;
			echo "Mail failed";
			echo $ci->email->print_debugger();
       
		}else{
			echo "mail sent ";
		}
		
   }
}