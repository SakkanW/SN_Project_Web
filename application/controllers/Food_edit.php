<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food_edit extends CI_Controller {

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
	
	
	//load database libray manually
	// $this->load->database('group_name',TRUE);
	
	//load Model
		$this->load->model('food_model');
		//$this->load->model('createpatient_model');
	}

	
	public function create()
	{
		
		$decks = $this->food_model->show_deck();
        $onedishes = $this->food_model->show_onedish();
        $carbohydrates = $this->food_model->show_carbohydrate();
        $carbohydrate_without_proteins = $this->food_model->show_carbohydrate_without_protein();
        $fats = $this->food_model->show_fat();
        $meats = $this->food_model->show_meat();
        $vegetables = $this->food_model->show_vegetable();
        $fruits = $this->food_model->show_fruit();
        $candys = $this->food_model->show_candy();
        $drinks = $this->food_model->show_drink();
        $garnishes = $this->food_model->show_garnish();


        $data = array('content'=>'food-edit');
        
        
        $data['decks'] = $decks;
        $data['onedishes'] =$onedishes;
        $data['carbohydrates']=$carbohydrates;
        $data['carbohydrate_without_proteins']=$carbohydrate_without_proteins;
        $data['fats']=$fats;
        $data['meats']=$meats;
        $data['vegetables']=$vegetables;
        $data['fruits']=$fruits;
        $data['candys']=$candys;
        $data['drinks']=$drinks;
        $data['garnishes']=$garnishes;
		$this->load->view('layouts/main',$data);
	}

	public function store()
	{
        $this->load->helper('form');
        $this->load->helper('url');
        $this->food_model->save_food();
        redirect('food_edit/create');
		
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

	public function destroy($food_nutrition_id = null)
	{
		$this->load->helper('form');
        $this->load->helper('url');
		$id = (int)$food_nutrition_id;
		$this->food_model->destroy($id);
		redirect('food_edit/create');
	}

	public function cancel_nutri($food_nutrition_id = null)
	{
		$this->load->helper('form');
        $this->load->helper('url');
		$id = (int)$food_nutrition_id;
		$this->food_model->cancel_nutri($id);
		redirect('food_edit/create');
	}

	public function active($food_nutrition_id = null)
	{
		$this->load->helper('form');
        $this->load->helper('url');
		$id = (int)$food_nutrition_id;
		$this->food_model->active($id);
		redirect('food_edit/create');
	}
}
