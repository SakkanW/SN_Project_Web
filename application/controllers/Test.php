<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	

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
	$this->load->model('test_model');
	// $this->load->helper(array('form', 'url'));
	// $this->load->library('form_validation');
	// $this->load->database();
	}

	public function save()
	{
		
		$this->test_model->test_user();
    }

    public function show()
    {
        $data1 = $this->test_model->show();
        $data['result'] = $data1;
        echo json_encode($data);
    }

	
}