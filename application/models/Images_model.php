<?php
class Images_model extends CI_Model {
    public function __construct()
	{
	//call CodeIgniter's default Constructor
	//parent::__construct();
	
	//load database libray manually
	$this->load->database();
    }
    
    public function save_images($patient_id,$staff_id,$name_images,$caption)
    {
    
        $data = array(
            'name_images' => $name_images,
            'caption'=>$caption,
            'patient_id' => $patient_id,
            'staff_id' => $staff_id
        );
        // $this->db->set('created_at', 'NOW()', FALSE);
        // $this->db->set('updated_at', 'NOW()', FALSE);
        return $this->db->insert('images', $data);
    }

    public function show($patient_id=null)
    {
         $this->db->select('codeigniter_register.name,images.name_images,images.created_at');
         $this->db->from('images');
        //$nutrtion=  $this->db->query("SELECT * FROM food_nutrition ;");
        $this->db->join('codeigniter_register', 'codeigniter_register.id=images.staff_id' );
        //$this->db->join('patient_nutrition', 'patient_nutrition.patient_id = patient.id' );
        $this->db->where('images.patient_id',$patient_id);
        //$query = $nutrtion->result();
        $query = $this->db->get();

        // if($query->num_rows()>0){
        return $query->result();
    //    }else{
        // return false;
    //    }
    }
    public function get_show_images($patient_id=null,$date_visit=null)
    {
        $this->db->select('codeigniter_register.name,images.name_images,images.created_at');
        $this->db->from('images');
       //$nutrtion=  $this->db->query("SELECT * FROM food_nutrition ;");
       $this->db->join('codeigniter_register', 'codeigniter_register.id=images.staff_id' );
       //$this->db->join('patient_nutrition', 'patient_nutrition.patient_id = patient.id' );
       $this->db->where('images.patient_id',$patient_id);
       $this->db->where('images.created_at',$date_visit);
       //$query = $nutrtion->result();
       $query = $this->db->get();

       // if($query->num_rows()>0){
       return $query->result();
   //    }else{
       // return false;
   //    }
    }


}