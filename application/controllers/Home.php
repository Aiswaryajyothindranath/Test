<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$Register_Model=$this->load->model('Register_Model');
		
		$userid = $this -> session -> userdata('uid');
		$user=$this->Register_Model->getUser($userid);
        $data['user'] =$user;
		$this->load->view('user_home', $data);		}

	public function admin_index(){
		$Register_Model=$this->load->model('Register_Model');
		$users=$this->Register_Model->getUsers();

		foreach($users as $key => $user) {
           $userss[$key]=$user;
        }	
          $data['users'] =$userss;
		  $this->load->view('admin_home', $data);	
	}

		public function approve($userid){
			$Register_Model=$this->load->model('Register_Model');
			$users=$this->Register_Model->approveUsers($userid);
			if($users){
			redirect('home/admin_index');
			}

	
		}
}