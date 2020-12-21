
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');



if ( ! function_exists('count_season_ticket')){
   function count_season_ticket(){
       //get main CodeIgniter object
       $ci =& get_instance();
	   
	   $fields = $ci->db->query('SELECT count(*)as stkt FROM `users_records` WHERE season_tkt = 1');
	   $row =  $fields->row();
	   
	    return $row->stkt;
	   
   }
}

if ( ! function_exists('count_women_club')){
   function count_women_club(){
       //get main CodeIgniter object
       $ci =& get_instance();
	   
	   $fields = $ci->db->query('SELECT count(*)as stkt FROM `users_records` WHERE women_club = 1');
	   $row =  $fields->row();
	   
	    return $row->stkt;
	   
   }
}


if ( ! function_exists('count_offers')){
   function count_offers(){
       //get main CodeIgniter object
       $ci =& get_instance();
	   
	   $fields = $ci->db->query('SELECT count(*)as stkt FROM `users_records` WHERE offers = 1');
	   $row =  $fields->row();
	   
	    return $row->stkt;
	   
   }
}


if ( ! function_exists('count_saluteMilitaryAppreciationClub')){
   function count_saluteMilitaryAppreciationClub(){
       //get main CodeIgniter object
       $ci =& get_instance();
	   
	   $fields = $ci->db->query('SELECT count(*)as stkt FROM `users_records` WHERE saluteMilitaryAppreciationClub = 1');
	   $row =  $fields->row();
	   
	    return $row->stkt;
	   
   }
}




?>
   
   
   
   
       