<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PatientInfoMobile extends CI_Controller {

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
	
	 
	//  if(!$this->session->userdata('id'))
	//  {
	//   redirect('login');
	//  }
	
	
	//load database libray manually
	// $this->load->database('group_name',TRUE);
	
	//load Model
		$this->load->model('createpatient_model');
	}


	public function show_patient_info()
	{
		$id_patient = $this->input->post('patient_id');
		$patient_id = (int)$id_patient;
		$patient_info = $this->createpatient_model->show_id($patient_id);
		$data = $patient_info;
		//$data['result'] = $patient_info;
		echo json_encode($data);
	}

}
?>