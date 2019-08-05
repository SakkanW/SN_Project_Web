<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginmobile extends CI_Controller {

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
   
	// function index()
	// {
	//  $this->load->view('test');
	// }
   
	function validation()
	{
	//  $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
	//  $this->form_validation->set_rules('user_password', 'Password', 'required');
	//  if($this->form_validation->run())
	//  {
		$result = $this->login_model->can_login($this->input->post('user_email'), $this->input->post('user_password'));
		// $user=$this->input->post('user_email');
	  if($result == '')
	  {
		//    redirect('dashboard');
		
	   $data = array('result' => 'success', 'msg' => [$this->session->userdata('id'), $this->session->userdata('name'),$this->session->userdata('position')]);

	  }
	  else
	  {
	//    $this->session->set_flashdata('message',$result);
    //    redirect('login');
         $data = array('result' => 'error', 'msg' => ['Email Already Used or Invalid - Unable to Create Account','gg'] );
		}
		
		// $data = array('result' => $user, 'msg' => 'Registered Successfully...');
	//  }
	//  else
	//  {
    // //   $this->index();
    //     $data = array('result' => 'error_validation','msg' => preg_replace("/[\n\r]/",".",strip_tags(validation_errors())));
		//  }
		// $data = array('result' => 'success', 'msg' => [$this->session->userdata('id'), $this->session->userdata('name'),$this->session->userdata('position')]);
     echo json_encode($data);
	}
   
   }
