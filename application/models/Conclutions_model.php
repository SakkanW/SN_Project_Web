<?php
class Conclutions_model extends CI_Model
{
    public function __construct()
	{
	//call CodeIgniter's default Constructor
	//parent::__construct();
	
	//load database libray manually
	$this->load->database();
    }

    public function save_conclutions($patient_id, $staff_id)//mobile
    {
        $data = array(
            'envi' => $this->input->post('envi'),
            'lifeday' => $this->input->post('lifeday'),
            'happiness' => $this->input->post('happiness'),
            'follow' => $this->input->post('follow'),
            'prob' => $this->input->post('prob'),

            'patient_id' => $patient_id,
            'staff_id' => $staff_id
        );
    
          return $this->db->insert('conclutions', $data);
    }

    public function update_conclutions($conclutions_id,$staff_id)//mobile
    {
        $data = array(
            'envi' => $this->input->post('envi'),
            'lifeday' => $this->input->post('lifeday'),
            'happiness' => $this->input->post('happiness'),
            'follow' => $this->input->post('follow'),
            'prob' => $this->input->post('prob'),

            // 'patient_id' => $patient_id,
            'staff_id' => $staff_id
        );
        $this->db->where('id',$conclutions_id);
        $this->db->set('updated_at', 'NOW()', FALSE);
          return $this->db->update('conclutions', $data);
    }

    public function show($patient_id)
    {
        $this->db->select('codeigniter_register.name,conclutions.envi,conclutions.lifeday,conclutions.happiness,conclutions.follow,conclutions.prob,conclutions.created_at');
        $this->db->from('conclutions');
       //$nutrtion=  $this->db->query("SELECT * FROM food_nutrition ;");
       $this->db->join('codeigniter_register', 'codeigniter_register.id =conclutions.staff_id ' );
       //$this->db->join('patient_nutrition', 'patient_nutrition.patient_id = patient.id' );
       $this->db->where('conclutions.patient_id',$patient_id);
       //$query = $nutrtion->result();
       $query = $this->db->get();

       // if($query->num_rows()>0){
       return $query->result();
   //    }else{
       // return false;
   //    }
    }
    public function get_show_conclutions($patient_id=null,$date_visit=null)
    {
        $this->db->select('codeigniter_register.name,conclutions.envi,conclutions.lifeday,conclutions.happiness,conclutions.follow,conclutions.prob,conclutions.created_at');
        $this->db->from('conclutions');
       //$nutrtion=  $this->db->query("SELECT * FROM food_nutrition ;");
       $this->db->join('codeigniter_register', 'codeigniter_register.id =conclutions.staff_id ' );
       //$this->db->join('patient_nutrition', 'patient_nutrition.patient_id = patient.id' );
       $this->db->where('conclutions.patient_id',$patient_id);
       $this->db->where('conclutions.created_at',$date_visit);
       //$query = $nutrtion->result();
       $query = $this->db->get();

       // if($query->num_rows()>0){
       return $query->row();
   //    }else{
       // return false;
   //    }
    }

    public function show_all($patient_id)//mobile
    {
        $this->db->select('conclutions.id,codeigniter_register.name,conclutions.created_at,conclutions.updated_at');
        $this->db->from('conclutions');
        $this->db->join('codeigniter_register', 'codeigniter_register.id =conclutions.staff_id ' );
    
       $this->db->where('conclutions.patient_id',$patient_id);
       $query = $this->db->get();
       return $query->result();
    }

    public function destroy($conclutions_id)//mobile
    {
        $this->db->where('id', $conclutions_id);
        $this->db->delete('conclutions');
    }
    public function show_conclutions_by_id($conclutions_id)//mobile
    {
        $this->db->select('conclutions.id,codeigniter_register.name,conclutions.envi,conclutions.lifeday,conclutions.happiness,conclutions.follow,conclutions.prob,conclutions.created_at,conclutions.updated_at');
        $this->db->from('conclutions');
      
       $this->db->join('codeigniter_register', 'codeigniter_register.id =conclutions.staff_id ' );
    
       $this->db->where('conclutions.id',$conclutions_id);
       
     
       $query = $this->db->get();

      
       return $query->row();
    }

}

?>