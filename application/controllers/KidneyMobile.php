<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KidneyMobile extends CI_Controller {

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
	
	

	
	//load Model
		$this->load->model('createpatient_model');
		$this->load->model('kidney_model');
	
	}

	public function show_all(/*$patient_id =null*/)
	{
		$patient_id = $this->input->post('patient_id');
		$id = (int)$patient_id;
		$result = $this->createpatient_model->show_id($id);
		$show_kidney = $this->kidney_model->show_kidney_his_for_mobile($id);
		//$data = array('content'=>'kidney');
		$data['patient_info']=$result;
		$data['kidneyinfo']=$show_kidney;
		//$this->load->view('layouts/main',$data);
		echo json_encode($data);
	}
	
	public function create()
	{
		# code...
	}

	public function store(/*$id_patient=null,$id_staff=null*/)
	{
		$id_patient = $this->input->post('id_patient');
		$id_staff = $this->input->post('id_staff');
		// $id_patient = 19;
		// $id_staff = 9;
		$patient_id = (int)$id_patient;
		$staff_id = (int)$id_staff;
		$patient_info = $this->createpatient_model->show_id($id_patient);
		$intensity = $patient_info->intensity;
		$number = $patient_info->number;
		$quantity_kidney = $patient_info->quan_kidney;
		$intensity_pa = (int)$intensity;
		$number_kidney = (int)$number;
		
	$this->kidney_model->save_mobile($patient_id,$staff_id,$intensity_pa,$number_kidney,$quantity_kidney);
		//redirect('kidney/index/'.$id_patient);
	}

	public function show_by_date()
	{
		$id_patient = $this->input->post('id_patient');
		$kidney_date = $this->input->post('date_kidney');
		$patient_id = (int)$id_patient;
		$date_kidney =  date('Y-m-d',strtotime($kidney_date));
		$data = $this->kidney_model->get_show_kidney($patient_id ,$date_kidney);
		echo json_encode($data);
	}

	public function edit(Type $var = null)
	{
		# code...
	}

	public function update(Type $var = null)
	{
		# code...
	}

	public function destroy(/*$id_kidney=null,$id_patient=null*/)
	{
		$id_kidney = $this->input->post('id_kidney');
		$id  = (int)$id_kidney;
		$this->kidney_model->destroy($id);
		// redirect('kidney/index/'.$id_patient);
	}
}