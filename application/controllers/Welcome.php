<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
	//Form Validation
		$this->form_validation->set_rules('firstname','First Name','required|alpha');
		$this->form_validation->set_rules('lastname','Last Name','required|alpha');
		$this->form_validation->set_rules('emailid','EmailId','required|valid_email|is_unique[tblusers.Email]');
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
		$password=$this->input->post('password');
		$this->load->model('Signup_Model');


		$this->Signup_Model->index($fname,$lname,$emailid,$password);
		} 
	}
function fetch_state($country_id)
 {
 	echo "hi"; die;
  $State_model=$this->load->model('State_model');
  $state=$this->State_model->getStates($country_id); 

  return $state;
 }
}