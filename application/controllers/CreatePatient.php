<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreatePatient extends CI_Controller {
	

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
	$this->load->model('createpatient_model');
	$this->load->helper(array('form', 'url'));
	$this->load->library('form_validation');
	// $this->load->database();
	 }

	public function index()
	{
		
		$data = array('content'=>'create-patient');
		$this->load->view('layouts/main',$data);
	}

	public function create()
	{
		// $this->load->helper('form');
		// $this->load->library('form_validation');
	
		//$data['title'] = 'Create patient';
	

		$this->form_validation->set_rules('firstname', 'Firstname', 'required');
		$this->form_validation->set_rules('lastname', 'Lastname', 'required');
		$this->form_validation->set_rules('idcard', 'Idcard', 'required|min_length[13]|max_length[13]|numeric|is_unique[patient.idcard]');
		$this->form_validation->set_rules('birthday', 'Birthday', 'required');
		$this->form_validation->set_rules('weight', 'Weight', 'required|numeric');
		$this->form_validation->set_rules('height', 'Height', 'required|numeric');
		$this->form_validation->set_rules('blood', 'Blood', 'required|numeric');
		$this->form_validation->set_rules('num_family', 'Num_family', 'required|numeric');
		$this->form_validation->set_rules('stat_fam', 'Stat_fam', 'required');
		$this->form_validation->set_rules('start', 'start', 'required|numeric');
		$this->form_validation->set_rules('system_use', 'System_use', 'required');
		$this->form_validation->set_rules('intensity', 'Intensity', 'required');
		$this->form_validation->set_rules('number', 'Number', 'required');
		$this->form_validation->set_rules('quan_kidney', 'Quan_kidney', 'required');
		$this->form_validation->set_rules('sex_pa', 'Sex_pa', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('tel_no', 'Tel_no', 'required|min_length[9]|max_length[10]|numeric');
		$this->form_validation->set_rules('user_email', 'User_email', 'trim|valid_email|is_unique[patient.user_email]');

$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
		
	
		if ($this->form_validation->run() === FALSE)
		{
			$data = array('content'=>'create-patient');
			$this->load->view('layouts/main',$data);
			
			// $this->load->view('validate_form');
			// redirect('createpatient');
	
		}
		else
		{
			// $this->load->model('CreatePatient_model');
            // $this->CreatePatient_model->insert_user();
			// $this->load->view('your_success_view');
			// $this->load->model('createpatient_model');
			$this->createpatient_model->save_create_patient();
			// $this->load->view('findpatient');
			redirect('findpatient');
		}
		
	}

	public function store(Type $var = null)
	{
		# code...
	}

	public function show(Type $var = null)
	{
		# code...
	}

	public function edit($patient_id=null)
	
	{
		$id = (int)$patient_id;
		$result = $this->createpatient_model->show_id($id);
		$data = array('content'=>'edit-patient');
		$data['patient_info']=$result;
		$this->load->view('layouts/main',$data);
	}

	public function update($patient_id=null)
	{
		$id = (int)$patient_id;
		$result = $this->createpatient_model->show_id($id);
		$data = array('content'=>'edit-patient');
		$data['patient_info']=$result;
		if($this->input->post('idcard') != $data['patient_info']->idcard) {
			$is_unique =  '|is_unique[patient.idcard]';
		 } else {
			$is_unique =  '';
		 }
		 if($this->input->post('user_email') != $data['patient_info']->user_email) {
			$is_unique2 =  '|is_unique[patient.user_email]';
		 } else {
			$is_unique2 =  '';
		 }
		
		$this->form_validation->set_rules('firstname', 'Firstname', 'required');
		$this->form_validation->set_rules('lastname', 'Lastname', 'required');
		$this->form_validation->set_rules('idcard', 'Idcard', 'required|min_length[13]|max_length[13]|numeric'.$is_unique);
		$this->form_validation->set_rules('birthday', 'Birthday', 'required');
		$this->form_validation->set_rules('weight', 'Weight', 'required|numeric');
		$this->form_validation->set_rules('height', 'Height', 'required|numeric');
		$this->form_validation->set_rules('blood', 'Blood', 'required|numeric');
		$this->form_validation->set_rules('num_family', 'Num_family', 'required|numeric');
		$this->form_validation->set_rules('stat_fam', 'Stat_fam', 'required');
		$this->form_validation->set_rules('start', 'start', 'required|numeric');
		$this->form_validation->set_rules('system_use', 'System_use', 'required');
		$this->form_validation->set_rules('intensity', 'Intensity', 'required');
		$this->form_validation->set_rules('number', 'Number', 'required');
		$this->form_validation->set_rules('quan_kidney', 'Quan_kidney', 'required');
		$this->form_validation->set_rules('sex_pa', 'Sex_pa', 'required');
		// $this->form_validation->set_rules('joined', 'Joined', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('tel_no', 'Tel_no', 'required|min_length[9]|max_length[10]|numeric');
		
		$this->form_validation->set_rules('user_email', 'User_email', 'trim|valid_email'.$is_unique2);

$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');


		if ($this->form_validation->run() === FALSE)
		{
			// $data = array('content'=>'create-patient');
			// $this->load->view('layouts/main',$data);
			// $this->load->view('validate_form');
			// $id = (int)$patient_id;
			// redirect('createpatient/edit/'.$id);
			$result = $this->createpatient_model->show_id($id);
		$data = array('content'=>'edit-patient');
		$data['patient_info']=$result;
		$this->load->view('layouts/main',$data);
		}
		else
		{
			// $this->load->model('CreatePatient_model');
            // $this->CreatePatient_model->insert_user();
			// $this->load->view('your_success_view');
			// $this->load->model('createpatient_model');
			
		
			$this->createpatient_model->update_info($id);
			
			// $this->load->view('findpatient');
			redirect('findpatient');
		}
		
		// $this->load->helper('form');
		// $this->load->library('form_validation');

			
		
	}

	public function show_his($patient_id=null)
	{
		
		$id = (int)$patient_id;
		$result = $this->createpatient_model->show_id($id);
		$data = array('content'=>'patient_his');
		$data['patient_info']=$result;
		$this->load->view('layouts/main',$data);
	}

	public function destroy(Type $var = null)
	{
		# code...
	}

	public function change_pass_by_admin()
	{
		$id_patient = $this->input->post('id_patient');
		$patient_id = (int)$id_patient;


		$id = (int)$patient_id;
		$result = $this->createpatient_model->show_id($id);
		$data = array('content'=>'edit-patient');
		$data['patient_info']=$result;
		
		
	
		$this->form_validation->set_rules('pass', 'Password', 'required');
		$this->form_validation->set_rules('confirm_pass', 'Confirm_pass', 'required|matches[pass]');

$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');


		if ($this->form_validation->run() === FALSE)
		{
		
			$result = $this->createpatient_model->show_id($patient_id);
		$data = array('content'=>'edit-patient');
		$data['patient_info']=$result;
		$this->load->view('layouts/main',$data);
		}
		else
		{
			
			$this->createpatient_model->change_pass_by_admin($patient_id);
		
			
			redirect('findpatient');
		}
		
	}
}
