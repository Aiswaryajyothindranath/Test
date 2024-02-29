<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model{
	public function register($fname,$lname,$emailid,$dob,$age,$gender,$address,$country,$state){
		$data=array(
		'first_name'=>$fname,
		'last_name'=>$lname,
		'email'=>$emailid,
		'dob'=>$dob,
		'age'=>$age,
		'gender'=>$gender,
		'address'=>$address,
		'country'=>$country,
		'state'=>$state);
		$query=$this->db->insert('tbl_users',$data);
		if($query){
			   $insert_id = $this->db->insert_id();
   				return  $insert_id;
		} else {
			return false;
		}
	}

	    public function getUser($userid) {
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('id',$userid);

        $qry = $this->db->get();
        return $qry->row_array();
    }

    	public function getUsers() {
        $this->db->select('*');
        $this->db->from('tbl_users');
        $qry = $this->db->get();
        return $qry->result_array();
    }
    public function approveUsers($userid) {

   		 $data = array('status' => 'approved');
		$this->db->where('id',$userid);
		$qry=$this->db->update('tbl_users', $data);
		return $qry;
	}

}