<?php
class Environ_model extends CI_Model
{
    public function __construct()
	{
	//call CodeIgniter's default Constructor
	//parent::__construct();
	
	//load database libray manually
	$this->load->database();
    }

    public function save_environ($patient_id, $staff_id)
    {
        $data = array(
            'envi' => $this->input->post('envi'),
            'around' => $this->input->post('around'),
            'placekeepbag' => $this->input->post('placekeepbag'),
            'houseclean' => $this->input->post('houseclean'),
            'localclean' => $this->input->post('localclean'),
            'patientroom' => $this->input->post('patientroom'),
            'toilet' => $this->input->post('toilet'),
            'sink' => $this->input->post('sink'),
            'water' => $this->input->post('water'),
            'prepare' => $this->input->post('prepare'),
            'mask' => $this->input->post('mask'),
            'handwash' => $this->input->post('handwash'),
            'kidneyrec' => $this->input->post('kidneyrec'),
            'medicine' => $this->input->post('medicine'),
            'epo' => $this->input->post('epo'),
            'nss' => $this->input->post('nss'),
            'eliminate' => $this->input->post('eliminate'),

            'patient_id' => $patient_id,
            'staff_id' => $staff_id
        );
    
          return $this->db->insert('environ', $data);
    }

    public function show($patient_id)
    {
        $this->db->select('codeigniter_register.name,environ.envi,environ.around,environ.placekeepbag,environ.houseclean,environ.localclean,environ.patientroom,environ.toilet,environ.sink,environ.water,environ.prepare,environ.mask,environ.handwash,environ.kidneyrec,environ.medicine,environ.epo,environ.nss,environ.eliminate,environ.created_at');
        $this->db->from('environ');
       //$nutrtion=  $this->db->query("SELECT * FROM food_nutrition ;");
       $this->db->join('codeigniter_register', 'codeigniter_register.id =environ.staff_id ' );
       //$this->db->join('patient_nutrition', 'patient_nutrition.patient_id = patient.id' );
       $this->db->where('environ.patient_id',$patient_id);
       //$query = $nutrtion->result();
       $query = $this->db->get();

       // if($query->num_rows()>0){
       return $query->result();
   //    }else{
       // return false;
   //    }
    }

    public function get_show_environ($patient_id=null,$date_visit=null)
    {
        $this->db->select('codeigniter_register.name,environ.envi,environ.around,environ.placekeepbag,environ.houseclean,environ.localclean,environ.patientroom,environ.toilet,environ.sink,environ.water,environ.prepare,environ.mask,environ.handwash,environ.kidneyrec,environ.medicine,environ.epo,environ.nss,environ.eliminate,environ.created_at');
        $this->db->from('environ');
       //$nutrtion=  $this->db->query("SELECT * FROM food_nutrition ;");
       $this->db->join('codeigniter_register', 'codeigniter_register.id =environ.staff_id ' );
       //$this->db->join('patient_nutrition', 'patient_nutrition.patient_id = patient.id' );
       $this->db->where('environ.patient_id',$patient_id);
       $this->db->where('environ.created_at',$date_visit);
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
        $this->db->select('environ.id,codeigniter_register.name,environ.created_at,environ.updated_at');
        $this->db->from('environ');
       //$nutrtion=  $this->db->query("SELECT * FROM food_nutrition ;");
       $this->db->join('codeigniter_register', 'codeigniter_register.id =environ.staff_id ' );
       //$this->db->join('patient_nutrition', 'patient_nutrition.patient_id = patient.id' );
       $this->db->where('environ.patient_id',$patient_id);
       //$query = $nutrtion->result();
       $query = $this->db->get();

       // if($query->num_rows()>0){
       return $query->result();
    }

    public function show_environ_by_id($environ_id)
    {
        $this->db->select('environ.id,codeigniter_register.name,environ.envi,environ.around,environ.placekeepbag,environ.houseclean,environ.localclean,environ.patientroom,environ.toilet,environ.sink,environ.water,environ.prepare,environ.mask,environ.handwash,environ.kidneyrec,environ.medicine,environ.epo,environ.nss,environ.eliminate,environ.created_at,environ.updated_at');
        $this->db->from('environ');
       //$nutrtion=  $this->db->query("SELECT * FROM food_nutrition ;");
       $this->db->join('codeigniter_register', 'codeigniter_register.id =environ.staff_id ' );
       //$this->db->join('patient_nutrition', 'patient_nutrition.patient_id = patient.id' );
       $this->db->where('environ.id',$environ_id);
  
       //$query = $nutrtion->result();
       $query = $this->db->get();

       // if($query->num_rows()>0){
       return $query->row();
    }

    public function update_environ($environ_id,$staff_id)
    {
        $data = array(
            'envi' => $this->input->post('envi'),
            'around' => $this->input->post('around'),
            'placekeepbag' => $this->input->post('placekeepbag'),
            'houseclean' => $this->input->post('houseclean'),
            'localclean' => $this->input->post('localclean'),
            'patientroom' => $this->input->post('patientroom'),
            'toilet' => $this->input->post('toilet'),
            'sink' => $this->input->post('sink'),
            'water' => $this->input->post('water'),
            'prepare' => $this->input->post('prepare'),
            'mask' => $this->input->post('mask'),
            'handwash' => $this->input->post('handwash'),
            'kidneyrec' => $this->input->post('kidneyrec'),
            'medicine' => $this->input->post('medicine'),
            'epo' => $this->input->post('epo'),
            'nss' => $this->input->post('nss'),
            'eliminate' => $this->input->post('eliminate'),

            // 'patient_id' => $patient_id,
            'staff_id' => $staff_id
        );
        $this->db->where('id',$environ_id);
       
         $this->db->set('updated_at', 'NOW()', FALSE);
          return $this->db->update('environ', $data);
    }

    public function destroy($environ_id)//mobile
    {
      
        $this->db->where('id', $environ_id);
        $this->db->delete('environ');
    }
}

?>