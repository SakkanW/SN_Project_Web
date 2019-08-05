<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Symtom extends CI_Controller {
	

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
	$this->load->model('symtom_model');
	// $this->load->helper(array('form', 'url'));
	// $this->load->library('form_validation');
	// $this->load->database();
	}

	public function save(/*$id_patient, $id_staff*/)
	{
				$id_patient = $this->input->post('id_patient');
				$id_staff = $this->input->post('id_staff');
        $patient_id = (int)$id_patient;
        $staff_id = (int)$id_staff;
		
		$this->symtom_model->save_symtom($patient_id,$staff_id);
	}
	
	public function get_all_symtom()
	{
		$id_patient =  $this->input->post('id_patient');
		$patient_id = (int)$id_patient;
		$data1 = $this->symtom_model->show_all($patient_id);
		$data['result']=$data1;
		echo json_encode($data);
	}

	public function show_by_id()
	{
		$id_symtom =  $this->input->post('id_symtom');
		$symtom_id  = (int)$id_symtom;
		$data = $this->symtom_model->show_symtom_by_id($symtom_id);
		echo json_encode($data);
	}

	public function update ()//mobile
	{
			$id_symtom =  $this->input->post('id_symtom');
			$symtom_id  = (int)$id_symtom;
			$id_staff = $this->input->post('id_staff');
			$staff_id = (int)$id_staff;

			$this->symtom_model->update_symtom(	$symtom_id,$staff_id);
	}
 public function destroy()
 {
	$id_symtom =  $this->input->post('id_symtom');
	$symtom_id  = (int)$id_symtom;
	$this->symtom_model->destroy($symtom_id);
 }

	
}