<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_management extends CI_Controller {
	

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct()
	{
	//call CodeIgniter's default Constructor
	parent::__construct();
	
	 if(!$this->session->userdata('id'))
	 {
	  redirect('login');
	 }
	
	
	// //load database libray manually
	// // $this->load->database('group_name',TRUE);
	
	// //load Model
	$this->load->model('user_management_model');
	$this->load->helper(array('form', 'url'));
	$this->load->library('form_validation');
	// $this->load->database();
	 }

	public function index()
	{
		$result = $this->user_management_model->show_all_users();
		$data = array('content'=>'user-management');
		$data['users'] = $result;
		$this->load->view('layouts/main',$data);
	}

	public function cancel($id_staff)
	{
		$staff_id = (int)$id_staff;
		$is_verified = "no";
		$data = array(
            
			'is_email_verified' => $is_verified
		);
		$this->user_management_model->verified($data,$staff_id);
		redirect('user_management');
    
	}

	public function active($id_staff)
	{
		$staff_id = (int)$id_staff;
		$is_verified = "yes";
		$data = array(
			'status' => $this->input->post('status'),
			'is_email_verified' => $is_verified
		);
		$this->user_management_model->verified($data,$staff_id);
		redirect('user_management');
	}

}
