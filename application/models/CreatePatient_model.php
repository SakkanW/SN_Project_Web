<?php
class CreatePatient_model extends CI_Model {
    public function __construct()
	{
	//call CodeIgniter's default Constructor
	//parent::__construct();
	
	//load database libray manually
	$this->load->database();
    $this->load->library('encrypt');
	
    }
    
    public function show()
    {
        $query = $this->db->get('patient');
        return $result=$query->result();
    }
    public function show_patient_section()
    {
        $this->db->select('id, fname, lname, idcard');
        $this->db->from('patient');
        return $this->db->get()->result();
    }

    public function show_id($id=null)
    {
        $query = $this->db->get_where('patient',array('id'=>$id));
        $result=$query->row();
        return $result;    
    }


    public function save_create_patient()
    {
    
        $date_format1 = $this->input->post('birthday');
    
        $password =  $this->encrypt->encode($date_format1);

        $str_date_split = explode ("/", $date_format1);
        $year_buddhis =   (int)$str_date_split[2];
        $year_buddhis = $year_buddhis-543;
        $date_save = $year_buddhis.'-'.$str_date_split[1].'-'.$str_date_split[0];
        $date_true= $date_save;
        $data = array(
            'fname' => $this->input->post('firstname'),
            'lname' => $this->input->post('lastname'),
            'idcard' => $this->input->post('idcard'),
            'birthday' => $date_true,
            'weight' => $this->input->post('weight'),
            'height' => $this->input->post('height'),
            'bloodsugar' => $this->input->post('blood'),
            'family_num' => $this->input->post('num_family'),
            'family_status' => $this->input->post('stat_fam'),
            'start_capd' => $this->input->post('start'),
            'system_use' => $this->input->post('system_use'),
            'intensity' => $this->input->post('intensity'),
            'number' => $this->input->post('number'),
            'sex_pa'=>$this->input->post('sex_pa'),
            'address'=>$this->input->post('address'),
            'tel_no'=>$this->input->post('tel_no'),
            'quan_kidney'=>$this->input->post('quan_kidney'),
            'user_email'=>$this->input->post('user_email'),
             'pass'=>$password
        );
    
          return $this->db->insert('patient', $data);
          
    }
    // public function edit($id=null)
    // {
    //     $query = $this->db->get_where('patient',array('id'=>$id));
    //     $result=$query->row();
    //     return $result;     
    // }
    public function update_info($id)
    {

        $date_format1 = $this->input->post('birthday');
    
       

        $str_date_split = explode ("/", $date_format1);
        $year_buddhis =   (int)$str_date_split[2];
        $year_buddhis = $year_buddhis-543;
        $date_save = $year_buddhis.'-'.$str_date_split[1].'-'.$str_date_split[0];
        $date_true= $date_save;
        $str=$this->input->post('joined');
        $data = array(
            'fname' => $this->input->post('firstname'),
            'lname' => $this->input->post('lastname'),
            'idcard' => $this->input->post('idcard'),
            'birthday' => $date_true,
            'weight' => $this->input->post('weight'),
            'height' => $this->input->post('height'),
            'bloodsugar' => $this->input->post('blood'),
            'family_num' => $this->input->post('num_family'),
            'family_status' => $this->input->post('stat_fam'),
            'start_capd' => $this->input->post('start'),
            'system_use' => $this->input->post('system_use'),
            'intensity' => $this->input->post('intensity'),
            'number' => $this->input->post('number'),
            'sex_pa'=>$this->input->post('sex_pa'),
            'address'=>$this->input->post('address'),
            'tel_no'=>$this->input->post('tel_no'),
            'quan_kidney'=>$this->input->post('quan_kidney'),

            //  '่joined'=>$str, //$this->input->post('joined')

            'user_email'=>$this->input->post('user_email')
            
        );
        $this->db->where('id',$id);
        $this->db->set('updated_at','NOW()', FALSE);
        $this->db->set('joined',$str);
          return $this->db->update('patient', $data);
        
    }
    public function get_count_all()
    {
            // $query = $this->db->query('SELECT * FROM patient');
            // $query = $this->db->get();
            $query = $this->db->query('SELECT * FROM patient');
            return $query->num_rows();
            // return $this->db->count_all_results('patient');
    }
    public function get_count_stay()
    {
            // $query = $this->db->query('SELECT * FROM patient');
            // $query = $this->db->get();
            $query = $this->db->get_where('patient', array('joined' => 'yes'));
            
            return $query->num_rows();
            // return $this->db->count_all_results('patient');
    }

    public function get_count_out()
    {
            // $query = $this->db->query('SELECT * FROM patient');
            // $query = $this->db->get();
            $query = $this->db->get_where('patient', array('joined' => 'no'));
            
            return $query->num_rows();
            // return $this->db->count_all_results('patient');
    }
    public function change_pass_by_admin($patient_id)
    {
    
        $password =  $this->encrypt->encode($this->input->post('pass'));

        $data = array(
             'who_change_pass' => $this->input->post('who_change_pass'),
            
             'pass'=>$password
        );
    
        $this->db->where('id',$patient_id);
        // $this->db->set('updated_at','NOW()', FALSE);
          return $this->db->update('patient', $data);
    }


}