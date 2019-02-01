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
	public function index()
	{
		$data = array('content'=>'create-patient');
		$this->load->view('layouts/main',$data);
	}

	public function create(Type $var = null)
	{
		$this->load->helper('form');
		// $this->load->library('form_validation');
	
		$data['title'] = 'Create patient';
	
		// $this->form_validation->set_rules('title', 'Title', 'required');
		// $this->form_validation->set_rules('text', 'Text', 'required');
	
		// if ($this->form_validation->run() === FALSE)
		// {
			// $data = array('content'=>'create-patient');
			// $this->load->view('layouts/main',$data);
			// $this->load->view('createpatient');
			
	
		// }
		// else
		// {
			$this->news_model->set_news();
			$this->load->view('findpatient');
		// }
		
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
