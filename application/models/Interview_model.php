<?php
class Interview_model extends CI_Model
{
    public function __construct()
	{
	//call CodeIgniter's default Constructor
	//parent::__construct();
	
	//load database libray manually
	$this->load->database();
    }

    public function save_interview($patient_id, $staff_id)
    {
        $data = array(
            'relationship' => $this->input->post('relationship'),
            'liquidchange' => $this->input->post('liquidchange'),
            'wound' => $this->input->post('wound'),
            'wholiquid' => $this->input->post('wholiquid'),
            'careyourselft' => $this->input->post('careyourselft'),
            'patienthelper' => $this->input->post('patienthelper'),
            'activity' => $this->input->post('activity'),
            'activityso' => $this->input->post('activityso'),
            'change_assign' => $this->input->post('change_assign'),
            'overview' => $this->input->post('overview'),

            'patient_id' => $patient_id,
            'staff_id' => $staff_id
        );
    
          return $this->db->insert('interview', $data);
    }

    public function show($patient_id)
    {
        $this->db->select('codeigniter_register.name,interview.relationship,interview.liquidchange,interview.wound,interview.wholiquid,interview.careyourselft,interview.patienthelper,interview.activity,interview.activityso,interview.change_assign,interview.overview,interview.created_at');
        $this->db->from('interview');
       //$nutrtion=  $this->db->query("SELECT * FROM food_nutrition ;");
       $this->db->join('codeigniter_register', 'codeigniter_register.id =interview.staff_id ' );
       //$this->db->join('patient_nutrition', 'patient_nutrition.patient_id = patient.id' );
       $this->db->where('interview.patient_id',$patient_id);
       //$query = $nutrtion->result();
       $query = $this->db->get();

       // if($query->num_rows()>0){
       return $query->result();
   //    }else{
       // return false;
   //    }
    }
    public function get_show_interview($patient_id=null,$date_visit=null)
    {
        $this->db->select('codeigniter_register.name,interview.relationship,interview.liquidchange,interview.wound,interview.wholiquid,interview.careyourselft,interview.patienthelper,interview.activity,interview.activityso,interview.change_assign,interview.overview,interview.created_at');
        $this->db->from('interview');
       //$nutrtion=  $this->db->query("SELECT * FROM food_nutrition ;");
       $this->db->join('codeigniter_register', 'codeigniter_register.id =interview.staff_id ' );
       //$this->db->join('patient_nutrition', 'patient_nutrition.patient_id = patient.id' );
       $this->db->where('interview.patient_id',$patient_id);
       $this->db->where('interview.created_at',$date_visit);
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
        $this->db->select('interview.id,codeigniter_register.name,interview.created_at,interview.updated_at');
        $this->db->from('interview');
    
       $this->db->join('codeigniter_register', 'codeigniter_register.id =interview.staff_id ' );
      
       $this->db->where('interview.patient_id',$patient_id);
      
       $query = $this->db->get();

       return $query->result();
    }

    public function show_interview_by_id($interview_id)
    {
        $this->db->select('codeigniter_register.name,interview.relationship,interview.liquidchange,interview.wound,interview.wholiquid,interview.careyourselft,interview.patienthelper,interview.activity,interview.activityso,interview.change_assign,interview.overview,interview.created_at');
        $this->db->from('interview');
       $this->db->join('codeigniter_register', 'codeigniter_register.id =interview.staff_id ' );
      
       $this->db->where('interview.id',$interview_id);
    
       $query = $this->db->get();

       return $query->row();
    }

    public function update_interview($interview_id,$staff_id)
    {
        $data = array(
            'relationship' => $this->input->post('relationship'),
            'liquidchange' => $this->input->post('liquidchange'),
            'wound' => $this->input->post('wound'),
            'wholiquid' => $this->input->post('wholiquid'),
            'careyourselft' => $this->input->post('careyourselft'),
            'patienthelper' => $this->input->post('patienthelper'),
            'activity' => $this->input->post('activity'),
            'activityso' => $this->input->post('activityso'),
            'change_assign' => $this->input->post('change_assign'),
            'overview' => $this->input->post('overview'),

            // 'patient_id' => $patient_id,
            'staff_id' => $staff_id
        );
        $this->db->where('id',$interview_id);
       
        $this->db->set('updated_at', 'NOW()', FALSE);
          return $this->db->update('interview', $data);
    }

    public function destroy($interview_id)//mobile
    {
        $id_interview =  $this->input->post('id_interview');
	    $interview_id  = (int)$id_interview;
	    $this->interview_model->destroy($interview_id);
    }
    
}

?>