<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		//Validation for login form
		$this->form_validation->set_rules('emailid','Email id','required|valid_email');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()){
			$email=$this->input->post('emailid');
			$password=$this->input->post('password');
			$this->load->model('Login_Model');
			$validate=$this->Login_Model->login($email,$password);
			if($validate){
				$this->session->set_userdata('uid',$validate->id);
				$this->session->set_userdata('id',$validate->id);	
	
				$this->session->set_userdata('fname',$validate->FirstName);
				if($email=='admin@gmail.com'){
					redirect('home/admin_index');

				}else{
					redirect('home/index');

				}	
			} else {
				$this->session->set_flashdata('error','Invalid login details.Please try again.');
				redirect('welcome');
			}
		} else{
			$this->load->view('login');	
		}
	}
	public function signup()
	{
	//Form Validation
		$this->form_validation->set_rules('firstname','First Name','required|alpha');
		$this->form_validation->set_rules('lastname','Last Name','required|alpha');
		$this->form_validation->set_rules('emailid','EmailId','required|valid_email|is_unique[tbl_users.Email]');
		$this->form_validation->set_rules('password','Password','required|min_length[6]');
		$this->form_validation->set_rules('confirmpassword','Confirm Password','required|min_length[6]|matches[password]');
		$this->form_validation->set_message('is_unique', 'This email is already exists.');

		$Country_Model=$this->load->model('Country_Model');
		$countries=$this->Country_Model->getCountries();

		foreach ($countries as $country) {
            $countriess[$country -> id] = $country ->name;
        }

		$Gender_Model=$this->load->model('Gender_Model');
		$genders=$this->Gender_Model->getGender();

		foreach ($genders as $gender) {
            $genderss[$gender -> id] = $gender ->gender;
        }

 		
        $data['countriess'] =$countriess;
        $data['genderss'] =$genderss;

		$this->load->view('signup', $data);
		if($this->form_validation->run()){
		//Getting Post Values
		$fname=$this->input->post('firstname');
		$lname=$this->input->post('lastname');
		$emailid=$this->input->post('emailid');
		$dob=$this->input->post('dob');
		$age=$this->input->post('age');
		$gender=$this->input->post('gender');
		$address=$this->input->post('address');

		$country=$this->input->post('country');

		$state=$this->input->post('state');
		$password=$this->input->post('password');

		$this->load->model('Register_model');
		$this->load->model('Login_model');


		$register_res=$this->Register_model->register($fname,$lname,$emailid,$dob,$age,$gender,$address,$country,$state);
		if($register_res){
			$login_res=$this->Login_model->login_insert($emailid,$password,$register_res);

			if($login_res){
			$this->session->set_flashdata('success','Registration successfull, Now you can login.');	
			redirect('welcome/index');
			} else {
				$this->session->set_flashdata('error','Something went wrong. Please try again.');	
				redirect('welcome/signup');	
			}
		}else{
			$this->session->set_flashdata('error2','Something went wrong. Please try again.');	
				redirect('welcome/signup');	
		}

		} 
	}

	public function logout(){
		$this->session->unset_userdata('uid');
		$this->session->sess_destroy();
		return redirect('welcome/index');
	}


	function fetch_state($country_id)
	 {
	  $State_model=$this->load->model('State_model');
	  $state=$this->State_model->getStates($country_id); 

	  return $state;
	 }
	}