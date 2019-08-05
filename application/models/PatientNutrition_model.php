<?php
class PatientNutrition_model extends CI_Model {
    public function __construct()
	{
	//call CodeIgniter's default Constructor
	//parent::__construct();
	
	//load database libray manually
	$this->load->database();
    }
    
 
    public function show($patient_id=null)
    {
        // $this->db->distinct('patient_nutrition.date_food');
           $this->db->select('patient_nutrition.id,food_nutrition.menu, food_nutrition.energy,food_nutrition.protein,food_nutrition.sodium,patient_nutrition.quantity,patient_nutrition.date_food,codeigniter_register.name');
        //  $this->db->select('*');
        $this->db->order_by('patient_nutrition.date_food');
        $this->db->from('food_nutrition');
        
        //$nutrtion=  $this->db->query("SELECT * FROM food_nutrition ;");
        $this->db->join('patient_nutrition', 'patient_nutrition.food_nutrition_id = food_nutrition.id' );
        $this->db->join('codeigniter_register', 'codeigniter_register.id = patient_nutrition.staff_id' );
        //$this->db->join('patient_nutrition', 'patient_nutrition.patient_id = patient.id' );
       
        $this->db->where('patient_nutrition.patient_id',$patient_id);
        
        //$query = $nutrtion->result();
        $query = $this->db->get();

        // if($query->num_rows()>0){
        return $query->result();
    //    }else{
        // return false;
    //    }
    }

    public function get_search_patient($patient_id=null,$date_food=null)
    {
        
         $this->db->select('patient_nutrition.id,food_nutrition.menu, food_nutrition.energy,food_nutrition.protein,food_nutrition.sodium,patient_nutrition.quantity,patient_nutrition.date_food,codeigniter_register.name');
        // $this->db->select('*');
        $this->db->from('food_nutrition');
        //$nutrtion=  $this->db->query("SELECT * FROM food_nutrition ;");
        $this->db->join('patient_nutrition', 'patient_nutrition.food_nutrition_id = food_nutrition.id' );
        $this->db->join('codeigniter_register', 'codeigniter_register.id = patient_nutrition.staff_id' );
        //$this->db->join('patient_nutrition', 'patient_nutrition.patient_id = patient.id' );
        $this->db->where('patient_nutrition.patient_id',$patient_id);
        $this->db->where('patient_nutrition.date_food',$date_food);
        //$query = $nutrtion->result();
        $query = $this->db->get();

        // if($query->num_rows()>0){
        return $query->result();
    //    }else{
        // return false;
    //    }
    }



    public function save_nutrition($food_nutrition_id= null, $patient_id=null,$staff_id=null,$patientDate=null,$quan)
    {
       
        $data = array(
            'quantity' => $quan,
            'date_food' => $patientDate,
            'food_nutrition_id' => $food_nutrition_id,
            'patient_id' => $patient_id,
            'staff_id' => $staff_id
           
        );
          return $this->db->insert('patient_nutrition', $data);
    }

    public function destroy($patient_nutrition_id=null)
    {
        $this->db->where('id', $patient_nutrition_id);
        $this->db->delete('patient_nutrition');
    }

    public function save_nutrition_from_mobile($quan,$patientDate,$food_nutrition_id,$patient_id,$staff_id)
    {
       
        $data = array(
            'quantity' => $quan,
            'date_food' => $patientDate,
            'food_nutrition_id' => $food_nutrition_id,
            'patient_id' => $patient_id,
            'staff_id' => $staff_id
           
        );
          return $this->db->insert('patient_nutrition', $data);
    }
}