<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
	 parent::__construct();
	 if(!$this->session->userdata('id'))
	 {
	  redirect('login');
	 }

	 $this->load->model('createpatient_model');
	}

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
	public function index()
	{
		// $this->load->view('dashboard');
		$count_patient_all = $this->createpatient_model->get_count_all();
		$count_patient_stay = $this->createpatient_model->get_count_stay();
		$count_patient_out = $this->createpatient_model->get_count_out();
		$patients =  $this->createpatient_model->show();
		$data = array('content'=>'dashboard');
		$data['count_patient_all'] = $count_patient_all;
		$data['count_patient_stay'] = $count_patient_stay;
		$data['count_patient_out'] = $count_patient_out;
		$data['patients'] = $patients;
		$this->load->view('layouts/main',$data);
	}
	
	public function create(Type $var = null)
	{
		# code...
	}

	public function store(Type $var = null)
	{
		# code...
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

	public function destroy(Type $var = null)
	{
		# code...
	}
}
