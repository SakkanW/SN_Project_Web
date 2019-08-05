<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kidney extends CI_Controller {

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

	
	//load Model
		$this->load->model('createpatient_model');
		$this->load->model('kidney_model');
	
	}

	public function index($patient_id =null)
	{
		$id = (int)$patient_id;
		$result = $this->createpatient_model->show_id($id);
		$show_kidney = $this->kidney_model->show_kidney_his($id);
		$data = array('content'=>'kidney');
		$data['patient_info']=$result;
		$data['kidney_info']=$show_kidney;
		$this->load->view('layouts/main',$data);
	}
	
	public function create()
	{
		# code...
	}

	public function store($id_patient=null,$id_staff=null)
	{
		$patient_id = (int)$id_patient;
		$staff_id = (int)$id_staff;
		$intensity = $this->input->post('intensity_pa');
		$number = $this->input->post('number_kidney');
		$quantity = $this->input->post('quan_kidney');
		$intensity_pa = (float)$intensity;
		$number_kidney = (float)$number;
		$quantity_kidney = (float)$quantity;
		$this->kidney_model->save($patient_id,$staff_id,$intensity_pa,$number_kidney,$quantity_kidney);
		redirect('kidney/index/'.$id_patient);
	}

	public function show(Type $var = null)
	{
		# code...
	}

	public function edit(Type $var = null)
	{
		# code...
	}

	public function update(Type $var = null)
	{
		# code...
	}

	public function destroy($id_kidney=null,$id_patient=null)
	{
		$id  = (int)$id_kidney;
		$this->kidney_model->destroy($id);
		redirect('kidney/index/'.$id_patient);
	}
}