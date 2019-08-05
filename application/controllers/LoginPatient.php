<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginPatient extends CI_Controller {

	public function __construct()
	{
	 parent::__construct();
	//  if($this->session->userdata('id'))
	//  {
	//   redirect('dashboard');
	//  }
	 $this->load->library('form_validation');
	 $this->load->library('encrypt');
	 $this->load->model('login_model');
	}
   
   
	function validation()
	{

		$result = $this->login_model->can_login_mobile($this->input->post('idcard'), $this->input->post('pass'));

	  if($result == '')
	  {

		
	   $data = array('result' => 'success', 'msg' => [$this->session->userdata('id'), $this->session->userdata('fname'),$this->session->userdata('lname'),$this->session->userdata('intensity'),$this->session->userdata('number'),$this->session->userdata('updated_at')]);

	  }
	  else
	  {

         $data = array('result' => 'error', 'msg' => ['Email Already Used or Invalid - Unable to Create Account','gg'] );
		}

     echo json_encode($data);
	}
   
   }
