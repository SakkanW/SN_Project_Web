<?php
class Food_model extends CI_Model {
    public function __construct()
	{
	//call CodeIgniter's default Constructor
	//parent::__construct();
	
	//load database libray manually
	$this->load->database();
    }
    
    // public function show()
    // {
    //     $query = $this->db->get('patient');
    //     return $result=$query->result();
    // }

    // public function show_id($id=null)
    // {
    //     $query = $this->db->get_where('patient',array('id'=>$id));
    //     $result=$query->row();
    //     return $result;    
    // }


    public function save_food()
    {
        //$this->load->helper('form');
        //$this->load->helper('url');
        
        
        $data = array(
            'menu' => $this->input->post('menu'),
            'unit' => $this->input->post('unit'),
            'energy' => $this->input->post('energy'),
            'protein' => $this->input->post('protein'),
            'sodium' => $this->input->post('sodium'),
            'category' => $this->input->post('category')
            
        );
          return $this->db->insert('food_nutrition', $data);
          
    }
    public function show_all()
    {
        $query = $this->db->get('food_nutrition');
        return $result=$query->result();
    }

    public function show_deck()
    {
        $this->db->order_by("id", "asc");;
        $deck = $this->db->get_where('food_nutrition',array('category'=>'กับข้าวร่วมสำรับ'));
        
        $result= $deck->result();
        return $result;
    }

    public function show_onedish()
    {
        $this->db->order_by("id", "asc");;
        $onedish = $this->db->get_where('food_nutrition',array('category'=>'อาหารจานเดียว'));
        $result = $onedish->result();
        return $result;
    }
    public function show_carbohydrate()
    {
        $this->db->order_by("id", "asc");;
        $carbohydrate = $this->db->get_where('food_nutrition',array('category'=>'ข้าวและแป้ง'));
        $result = $carbohydrate->result();
        return $result;
    }
    public function show_carbohydrate_without_protein()
    {
        $this->db->order_by("id", "asc");;
        $carbohydrate_without_protein =$this->db->get_where('food_nutrition',array('category'=>'แป้งปลอดโปรตีน'));
        $result = $carbohydrate_without_protein->result();
        return $result;
    }
    public function show_fat()
    {
        $this->db->order_by("id", "asc");;
        $fat = $this->db->get_where('food_nutrition',array('category'=>'ไขมัน'));
        $result = $fat->result();
        return $result;
    }
    public function show_meat()
    {
        $this->db->order_by("id", "asc");;
        $meat = $this->db->get_where('food_nutrition',array('category'=>'เนื้อสัตว์'));
        $result = $meat->result();
        return $result;
    }
    public function show_vegetable()
    {
        $this->db->order_by("id", "asc");;
        $vegetable = $this->db->get_where('food_nutrition',array('category'=>'ผัก'));
        $result = $vegetable->result();
        return $result;
    }
    public function show_fruit()
    {
        $this->db->order_by("id", "asc");;
        $fruit = $this->db->get_where('food_nutrition',array('category'=>'ผลไม้'));
        $result = $fruit->result();
        return $result;
    }
    public function show_candy()
    {
        $this->db->order_by("id", "asc");;
        $candy = $this->db->get_where('food_nutrition',array('category'=>'ขนม'));
        $result = $candy->result();
        return $result;
    }
    public function show_drink()
    {
        $this->db->order_by("id", "asc");;
        $drink = $this->db->get_where('food_nutrition',array('category'=>'เครื่องดื่ม'));
        $result = $drink->result();
        return $result;
    }
    public function show_garnish()
    {
        $this->db->order_by("id", "asc");;
        $garnish = $this->db->get_where('food_nutrition',array('category'=>'เครื่องปรุง'));
        $result = $garnish->result();
        return $result;
    }
    //save into patient_nutrition table
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
    public function destroy($food_nutrition_id = null)
    {
        $this->db->where('id', $food_nutrition_id);
        $this->db->delete('food_nutrition');
    }

    public function cancel_nutri($food_nutrition_id = null)
    {
        $no = 'no';
        $data = array(
            'is_active' => $no
            
        );
        $this->db->where('id',$food_nutrition_id);
          return $this->db->update('food_nutrition', $data);
    }
    public function active($food_nutrition_id = null)
    {
        $yes = 'yes';
        $data = array(
            'is_active' => $yes
            
        );
        $this->db->where('id',$food_nutrition_id);
          return $this->db->update('food_nutrition', $data);
    }
}