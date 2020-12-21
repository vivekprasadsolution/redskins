<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fetch_record extends CI_Model{
	
	
	 public function get_count() {
        return $this->db->count_all('users_records');
    }

    public function fetch_row($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('users_records');

        return $query->result();
    }
	
}