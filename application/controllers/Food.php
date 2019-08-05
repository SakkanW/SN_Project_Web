<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food extends CI_Controller {

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
		$this->load->model('createpatient_model');
		$this->load->model('food_model');
		$this->load->model('patientnutrition_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		//$this->load->model('createpatient_model');
	}

	public function index($id=null /*patient_id*/ )
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
		
		$data = array('content'=>'food');

		$data['foods'] = $food_all;
		$data['patient'] = $result;
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
		$data['food_nutritions']=$food_nutritions;
		$this->load->view('layouts/main',$data);
	}
	
	public function create()
	{
		# code...
	}

	public function store()
	{
		$patient_id=$this->input->post('patientData');
		$food_nutrition_id= $this->input->post('foodData');
		$staff_id =$this->input->post('staffData');
		$patientDate1 = $this->input->post('patientDate1');
		$patientDate = date('Y-m-d',strtotime($patientDate1));
		$quan = $this->input->post('quan');
		$quan1 = (int)$quan;
		// echo '<script language="javascript">';
		// echo 'alert("'.$quan1." ".$patientDate.'")';
		// echo '</script>';
		$id_food = (int)$food_nutrition_id;
		$id_patient = (int)$patient_id;
		$id_staff = (int)$staff_id;
		// $this->load->helper('form');
		$this->patientnutrition_model->save_nutrition($id_food, $id_patient,$id_staff,$patientDate,$quan1);
			// echo '<script language="javascript">';
			// echo 'alert("'.$quan1." ".$patientDate.'")';
			// echo '</script>'; 
		// redirect('food/index/'.$patient_id);
		//echo 'เพิ่มแล้ว'; 
		//  echo json_encode($data); 
		
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

	public function destroy(/*$patient_id,$patient_nutrition_id=null*/)
	{
		$patient_nutrition_id = $this->input->post('product_code');
		$id = (int)$patient_nutrition_id;
		$data = $this->patientnutrition_model->destroy($id);
		echo json_encode($data);
		// $id_patient = (int)$patient_id;
		// redirect('food/index/'.$id_patient);
	}

	public function destroy2($patient_id,$patient_nutrition_id=null)
	{
			// $patient_nutrition_id = $this->input->post('product_code');
			$id = (int)$patient_nutrition_id;
			$data = $this->patientnutrition_model->destroy($id);
			// echo json_encode($data);
			 $id_patient = (int)$patient_id;
			 redirect('food/index/'.$id_patient);
	}

	public function get_patient_result()
	{
		$patientData1 = $this->input->post('patientData');
		$patientDate1 = $this->input->post('patientDate');
		$patientDate = date('Y-m-d',strtotime($patientDate1));
		$patientData = (int)$patientData1;
		// echo $patientData;
		// echo $patientDate;
        if(isset($patientData) and !empty($patientData)){
			$records = $this->patientnutrition_model->get_search_patient($patientData,$patientDate);
			echo json_encode($records);
		// 	$output = '';
		// 	$i=1;
		// 	$total_energy = 0;
		// 	$total_protein = 0;
		// 	$total_sodium = 0;
        //     foreach($records as $row){
		// 		$total_energy = $total_energy+($row->energy)*($row->quantity);
		// 		$total_protein = $total_protein+($row->protein)*($row->quantity);
		// 		$total_sodium = $total_sodium+($row->sodium)*($row->quantity);
		// 		$output .= '
			
		// 		<tr>
		// 			<td>'.$i++.'</td>
		// 			<td>'.$row->menu .'</td>
		// 			<td>'.$row->energy .'</td>
		// 			<td>'.$row->protein .'</td>
		// 			<td>'.$row->sodium .'</td>
		// 			<td>'.$row->quantity .'</td>
		// 			<td>'.$row->name .'</td>
		// 		</tr>
              
                  
        // 		';
		// 	}
		// 	$output .= '
			
		// 	<tr>
		// 		<td>  </td>
		// 		<td> </td>
		// 		<td>พลังงานรวม</td>
		// 		<td>โปรตีนรวม</td>
		// 		<td>โซเดียมรวม</td>
		// 		<td></td>
		// 		<td></td>
		// 	</tr>
		// 	<tr>
		// 		<td></td>
		// 		<td></td>
		// 		<td>'.$total_energy." "."kcal".'</td>
		// 		<td>'.$total_protein ." "."กรัม".'</td>
		// 		<td>'.$total_sodium ." ". "มิลลิกรัม".'</td>
		// 		<td></td>
		// 		<td></td>
		// 	</tr>
              
                  
        // 		';
		// 	echo $output;
			
        // }
        // else {
        //  echo '<center><ul class="list-group"><li class="list-group-item">'.'ไม่มีข้อมูล'.'</li></ul></center>';
         }
	}
}
