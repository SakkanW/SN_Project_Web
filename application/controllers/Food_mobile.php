<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food_mobile extends CI_Controller {

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
	
	
	
	//load database libray manually
	// $this->load->database('group_name',TRUE);
	
	//load Model
		$this->load->model('createpatient_model');
		$this->load->model('food_model');
		$this->load->model('patientnutrition_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		//$this->load->model('createpatient_model');
	}

	public function show_food($id=null /*patient_id*/ )
	{
		$this->load->model('food_model');
		$id=(int)$id;
		$result = $this->createpatient_model->show_id($id);
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
		$food_nutritions = $this->patientnutrition_model->show($id);
		$food_all = $this->food_model->show_all();
		
		// $data = array('content'=>'food');

		// $data['foods'] = $food_all;
		// $data['patient'] = $result;
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
		// $data['food_nutritions']=$food_nutritions;
        //$this->load->view('layouts/main',$data);
        echo json_encode($data);
	}
	

	public function store($patient_id=null,$food_nutrition_id= null,$staff_id =null)
	{
		$id_food = (int)$food_nutrition_id;
		$id_patient = (int)$patient_id;
		$id_staff = (int)$staff_id;
		$this->load->helper('form');
		$this->patientnutrition_model->save_nutrition($id_food, $id_patient,$id_staff);
		redirect('food/index/'.$patient_id);
		
	}
	
	public function get_data_from_mobile()
	{
		
		$data = $this->input->post('food_data');
		// $data = '[{"Idnurse":"14","Idpatient":"6","date":"07/05/2019","idFood":"4","nameFood":"ไข่เจียว","quantity":"1"}]';
		$foods= json_decode($data);
		// $foods= $data;
		// echo json_encode($foods);
		// if(isset($foods)){
		// 	echo json_encode($foods);
			
		//  }
		//  else{

		//  }
		// if (is_array($foods->food_data) || is_object($foods->food_data))
		// {
			foreach($foods as $row)
			{
				$quantity1 = $row->quantity;
				echo $quantity  = (int)$quantity1;

				$patientDate1 = $row->date;
				$patientDate2 = str_replace('/', '-', $patientDate1);
				echo $patientDate = date('Y-m-d', strtotime($patientDate2));

				$food_nutrition_id1 = $row->idFood;
				echo $food_nutrition_id = (int)$food_nutrition_id1;

				$patient_id1 = $row->Idpatient;
				echo $patient_id =  (int)$patient_id1;

				$staff_id1 = $row->Idnurse;
				echo $staff_id = (int)$staff_id1;
				$this->patientnutrition_model->save_nutrition_from_mobile($quantity,$patientDate,$food_nutrition_id,$patient_id,$staff_id);
			
			}
		// }else{
		// 	echo "no";
		// }
		
		// for($i=0;$i<1;$i++)
		// {
		// 	$quantity1 = $row['quantity'];
		// 	$quantity  = (int)$quantity1;

		// 	$patientDate1 = $row['date'];
		// 	$patientDate2 = str_replace('/', '-', $patientDate1);
		// 	$patientDate = date('Y-m-d', strtotime($patientDate2));

		// 	$food_nutrition_id1 = $row['idFood'];
		// 	$food_nutrition_id = (int)$food_nutrition_id1;

		// 	$patient_id1 = $row['Idpatient'];
		// 	$patient_id =  (int)$patient_id1;

		// 	$staff_id1 = $row['Idnurse'];
		// 	$staff_id = (int)$staff_id1;
		// 	$this->patientnutrition_model->save_nutrition_from_mobile($quantity,$patientDate,$food_nutrition_id,$patient_id,$staff_id);
			
		// }
		
		//   print_r($foods);
		//   echo $foods['food_data'][0]['Idnurse'];
	}
	public function show_all_food(/*$patient_id=null*/)
	{
		$patient_id = $this->input->post('id_patient');
		$id = (int)$patient_id;
		$patient_nutrition = $this->patientnutrition_model->show($id);
		$data['result']=$patient_nutrition;
		echo json_encode($data);
	}

	

	public function destroy(/*$patient_id,$patient_nutrition_id=null*/)
	{





		
		$patient_nutrition_id = $this->input->post('id_nutri');
		$id = (int)$patient_nutrition_id;
		$this->patientnutrition_model->destroy($id);
		$id_patient = (int)$patient_id;
		// redirect('food/index/'.$id_patient);
	}
}
