<?php
class Symtom_model extends CI_Model
{
    public function __construct()
	{
	//call CodeIgniter's default Constructor
	//parent::__construct();
	
	//load database libray manually
	$this->load->database();
    }

    public function save_symtom($patient_id, $staff_id)
    {
        // $timevisit_or = $this->input->post('timevisit');
        // $timevisit = (int)$timevisit_or;
        $bloodpressure1_or = $this->input->post('bloodpressure1');
        $bloodpressure1 = (int)$bloodpressure1_or;
        $bloodpressure2_or = $this->input->post('bloodpressure2');
        $bloodpressure2 = (int)$bloodpressure2_or;
        $weight_or= $this->input->post('weight');
        $weight = (int)$weight_or;
        $data = array(
            // 'timesvisit' => $timevisit,
            'bloodpressure1' => $bloodpressure1,
            'bloodpressure2' => $bloodpressure2,
            'weight' =>$weight_or,
            'scale' => $this->input->post('scale'),
            'symtomprob' => $this->input->post('symtomprob'),
            'dizzy' => $this->input->post('dizzy'),
            'squeamish' => $this->input->post('squeamish'),
            'boredom' => $this->input->post('boredom'),
            'swelling' => $this->input->post('swelling'),
            'breathe' => $this->input->post('breathe'),
            'pale' => $this->input->post('pale'),
            'infected' => $this->input->post('infected'),
            'relationshipprob' => $this->input->post('relationshipprob'),
            'other' => $this->input->post('other'),


            'patient_id' => $patient_id,
            'staff_id' => $staff_id
        );
    
          return $this->db->insert('symtom', $data);
    }

    // public function show()
    // {
    //     $show = $this->db->get_where('test_user');
    //     $result= $show->result();
    //     return $result;
    // }
    public function show($patient_id=null)
    {
         $this->db->select('codeigniter_register.name,symtom.bloodpressure1,symtom.bloodpressure2,symtom.weight,symtom.scale,symtom.symtomprob,symtom.dizzy,symtom.squeamish,symtom.boredom,symtom.swelling,symtom.breathe,symtom.pale,symtom.infected,symtom.relationshipprob,symtom.other,symtom.created_at');
         $this->db->from('symtom');
        //$nutrtion=  $this->db->query("SELECT * FROM food_nutrition ;");
        $this->db->join('codeigniter_register', 'codeigniter_register.id =symtom.staff_id ' );
        //$this->db->join('patient_nutrition', 'patient_nutrition.patient_id = patient.id' );
        $this->db->where('symtom.patient_id',$patient_id);
        //$query = $nutrtion->result();
        $query = $this->db->get();

        // if($query->num_rows()>0){
        return $query->result();
    //    }else{
        // return false;
    //    }
    }
    public function get_show_symtom($patient_id=null,$date_visit=null)
    {
         $this->db->select('codeigniter_register.name,symtom.bloodpressure1,symtom.bloodpressure2,symtom.weight,symtom.scale,symtom.symtomprob,symtom.dizzy,symtom.squeamish,symtom.boredom,symtom.swelling,symtom.breathe,symtom.pale,symtom.infected,symtom.relationshipprob,symtom.other');
         $this->db->from('symtom');
        //$nutrtion=  $this->db->query("SELECT * FROM food_nutrition ;");
        $this->db->join('codeigniter_register', 'codeigniter_register.id =symtom.staff_id ' );
        //$this->db->join('patient_nutrition', 'patient_nutrition.patient_id = patient.id' );
        $this->db->where('symtom.patient_id',$patient_id);
         $this->db->where('symtom.created_at',$date_visit);
        // $this->db->where("DATE_FORMAT(from_unixtime(symtom.created_at), '%Y-%m-%d')", $date_visit, false);
        // $this->db->where('created_at >=',$date_visit);
        // $this->db->where('created_at <=',$date_visit);
        //$query = $nutrtion->result();
        $query = $this->db->get();

        // if($query->num_rows()>0){
        return $query->row();
    //    }else{
        // return false;
    //    }
    }
    public function show_all($patient_id=null)//mobile
    {
        $this->db->select('symtom.id,codeigniter_register.name,symtom.created_at,symtom.updated_at');
         $this->db->from('symtom');
       
        $this->db->join('codeigniter_register', 'codeigniter_register.id =symtom.staff_id ' );
        
        $this->db->where('symtom.patient_id',$patient_id);
    
        $query = $this->db->get();

       
        return $query->result();
    }

    public function show_symtom_by_id($symtom_id)
    {
        $this->db->select('symtom.id,codeigniter_register.name,symtom.bloodpressure1,symtom.bloodpressure2,symtom.weight,symtom.scale,symtom.symtomprob,symtom.dizzy,symtom.squeamish,symtom.boredom,symtom.swelling,symtom.breathe,symtom.pale,symtom.infected,symtom.relationshipprob,symtom.other');
        $this->db->from('symtom');
        $this->db->join('codeigniter_register', 'codeigniter_register.id =symtom.staff_id ' );
        $this->db->where('symtom.id',$symtom_id);
        $query = $this->db->get();
        return $query->row();
    }

    public function update_symtom($symtom_id,$staff_id)
    {
        // $timevisit_or = $this->input->post('timevisit');
        // $timevisit = (int)$timevisit_or;
        $bloodpressure1_or = $this->input->post('bloodpressure1');
        $bloodpressure1 = (int)$bloodpressure1_or;
        $bloodpressure2_or = $this->input->post('bloodpressure2');
        $bloodpressure2 = (int)$bloodpressure2_or;
        $weight_or= $this->input->post('weight');
        $weight = (int)$weight_or;
        $data = array(
            // 'timesvisit' => $timevisit,
            'bloodpressure1' => $bloodpressure1,
            'bloodpressure2' => $bloodpressure2,
            'weight' =>$weight_or,
            'scale' => $this->input->post('scale'),
            'symtomprob' => $this->input->post('symtomprob'),
            'dizzy' => $this->input->post('dizzy'),
            'squeamish' => $this->input->post('squeamish'),
            'boredom' => $this->input->post('boredom'),
            'swelling' => $this->input->post('swelling'),
            'breathe' => $this->input->post('breathe'),
            'pale' => $this->input->post('pale'),
            'infected' => $this->input->post('infected'),
            'relationshipprob' => $this->input->post('relationshipprob'),
            'other' => $this->input->post('other'),


            // 'patient_id' => $patient_id,
            'staff_id' => $staff_id
        );
        $this->db->where('id',$symtom_id);
       
        $this->db->set('updated_at', 'NOW()', FALSE);
          return $this->db->update('symtom', $data);
    }

    public function destroy($symtom_id)//mobile
    {
        $this->db->where('id', $symtom_id);
        $this->db->delete('symtom');
    }
}

?>