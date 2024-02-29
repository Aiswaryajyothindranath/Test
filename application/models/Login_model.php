<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{
	public function login_insert($emailid,$password,$user_id){
		$data=array(

		'username'=>$emailid,
		'password'=>$password,
		'user_id'=>$user_id

		);
		$query=$this->db->insert('tbl_login',$data);
		if($query){
			return true;
		}else{
			return false;
		}
		
	}

	public function login($email,$password){
		$data=array(
		'username'=>$email,
		'Password'=>$password);
		$query=$this->db->where($data);
		$login=$this->db->get('tbl_login');
		 if($login!=NULL){
		return $login->row();
		 }  
}
}