<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Interview extends CI_Controller {
	

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

	
	
	// //load database libray manually
	// // $this->load->database('group_name',TRUE);
	
	// //load Model
	$this->load->model('interview_model');
	// $this->load->helper(array('form', 'url'));
	// $this->load->library('form_validation');
	// $this->load->database();
	}

	public function save(/*$id_patient, $id_staff*/)
	{
				$id_patient =  $this->input->post('id_patient');
				$id_staff = $this->input->post('id_staff');
        $patient_id = (int)$id_patient;
        $staff_id = (int)$id_staff;
		
		$this->interview_model->save_interview($patient_id,$staff_id);
	}
	
	public function get_all_interview()
	{
		$id_patient =  $this->input->post('id_patient');
		$patient_id = (int)$id_patient;
	
		$data1 = $this->interview_model->show_all($patient_id);
		$data['result']=$data1;
		echo json_encode($data);
	}

	public function show_by_id()
	{
		$id_interview =  $this->input->post('id_interview');
		$interview_id  = (int)$id_interview;
		$data1 = $this->interview_model->show_interview_by_id($interview_id);
		$data['result']=$data1;
		echo json_encode($data);
	}

	public function update ()//mobile
	{
			$id_interview =  $this->input->post('id_interview');
			$interview_id  = (int)$id_interview;

			$this->interview_model->update_interview(	$interview_id);
	}
 public function destroy()
 {
	$id_interview =  $this->input->post('id_interview');
	$interview_id  = (int)$id_interview;
	$this->interview_model->destroy($interview_id);
 }

	
}