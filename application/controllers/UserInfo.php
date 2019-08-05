<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserInfo extends CI_Controller {
	

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
    $this->load->model('register_model');
	$this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
    $this->load->library('encrypt');
	// $this->load->database();
	 }

	public function index($id_staff)
	{
        // $id_staff = $this->input->post('id_staff');
        $id = (int)$id_staff;
		$result = $this->user_management_model->show_user_info($id);
		$data = array('content'=>'user-info');
		$data['user_info'] = $result;
		$this->load->view('layouts/main',$data);
    }
    
    public function info_change($id_staff)
    {
        $id = (int)$id_staff;
       
		$result = $this->user_management_model->show_user_info($id);
        if($this->input->post('user_email') != $result->email) {
			$is_unique2 =  '|is_unique[codeigniter_register.email]';
		 } else {
			$is_unique2 =  '';
		 }
        $this->form_validation->set_rules('user_name', 'Name', 'required|trim');
        $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email'.$is_unique2);
        $this->form_validation->set_rules('position', 'Position', 'required');
        // $this->form_validation->set_rules('user_password', 'Password', 'required');
        // $this->form_validation->set_rules('confirm_pass', 'Confirm_pass', 'required|matches[user_password]');


        if($this->form_validation->run() === true)
        {  

            
            // $encrypted_password = $this->encrypt->encode($this->input->post('user_password'));
   
            $data = array(
                'name'  => $this->input->post('user_name'),
                'email'  => $this->input->post('user_email'),
                'position'  => $this->input->post('position')
                // 'password' => $encrypted_password,
                // 'status' => $status,
                // 'is_email_verified' => $is_verified,
                // 'verification_key' => $verification_key
            );
            $this->register_model->update($data,$id);
            $this->index($id);
        }else{
            $this->index($id);
        }
            
 
    }

    public function password_change($id_staff)
    {
        $id = (int)$id_staff;
       
		$result = $this->user_management_model->show_user_info($id);
 
        $this->form_validation->set_rules('user_password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_pass', 'Confirm_pass', 'required|matches[user_password]');


        if($this->form_validation->run() === true)
        {  

            
            $encrypted_password = $this->encrypt->encode($this->input->post('user_password'));
   
            $data = array(
              
                'password' => $encrypted_password

            );
            $this->register_model->update_pass($data,$id);
            $this->index($id);
        }else{
            $this->index($id);
        }

    }

	


}
