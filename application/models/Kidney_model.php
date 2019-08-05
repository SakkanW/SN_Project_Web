<?php
class Kidney_model extends CI_Model {
    public function __construct()
	{
	//call CodeIgniter's default Constructor
	parent::__construct();
	
	//load database libray manually
	$this->load->database();
	}
    public function save($patient_id,$staff_id,$intensity_pa,$number_kidney,$quantity_kidney)
	{
		$in_or  = $this->input->post('in');
		$out_or =  $this->input->post('out');
		$in = (int)$in_or;
		$out = (int)$out_or;

		$result = $out-$in;
        $date_format = $this->input->post('date_kidney');
        $str_date_split = explode ("/", $date_format);
        $year_buddhis =   (int)$str_date_split[2];
        $year_buddhis = $year_buddhis-543;
        $date_save = $year_buddhis.'-'.$str_date_split[1].'-'.$str_date_split[0];
        $date_true= $date_save; 
        // $date_format1 =  str_replace('/', '-', $date_format);
        
        // $date_true = date('Y-m-d', strtotime($date_format1));
		// $date_kidney = $date_true;

		$data = array(
            'in' => $in,
            'out' => $out, 
            'result' => $result,
            'date_kidney' => $date_true,
            'intensity_pa' => $intensity_pa,
            'number_kidney' => $number_kidney,
            'quantity_liq' => $quantity_kidney,
            'patient_id' => $patient_id,
            'staff_id' => $staff_id
		);
		return $this->db->insert('kidney', $data);
    }
    public function save_mobile($patient_id,$staff_id,$intensity_pa,$number_kidney,$quantity_kidney)
	{
		$in_or  = $this->input->post('in');
		$out_or =  $this->input->post('out');
		$in = (int)$in_or;
		$out = (int)$out_or;

		$result = $out-$in;
        $date_format = $this->input->post('date_kidney'); 
        $date_format1 =  str_replace('/', '-', $date_format);
        
        $date_true = date('Y-m-d', strtotime($date_format1));
		$date_kidney = $date_true;

		$data = array(
            'in' => $in,
            'out' => $out, 
            'result' => $result,
            'date_kidney' => $date_kidney,
            'intensity_pa' => $intensity_pa,
            'number_kidney' => $number_kidney,
            'quantity_liq' => $quantity_kidney,
            'patient_id' => $patient_id,
            'staff_id' => $staff_id
		);
		return $this->db->insert('kidney', $data);
	}

	public function show_kidney_his($patient_id = null)
	{
		// $query = $this->db->get_where('kidney',array('patient_id'=>$patient_id));
        // $result=$query->result();
		// return $result; 
		$this->db->select('kidney.id,kidney.in, kidney.out, kidney.result, kidney.date_kidney,codeigniter_register.name, kidney.intensity_pa,kidney.number_kidney,kidney.quantity_liq');
        $this->db->from('kidney');

        $this->db->join('codeigniter_register', 'codeigniter_register.id = kidney.staff_id' );
       
        $this->db->where('kidney.patient_id',$patient_id);
        // $this->db->where('kidney.date_kidney',$date_kidney);
    
        $query = $this->db->get();

        // if($query->num_rows()>0){
        return $query->result();
    //    }else{
        // return false;
    //    }
    }
    public function show_kidney_his_for_mobile($patient_id = null)
	{
		// $query = $this->db->get_where('kidney',array('patient_id'=>$patient_id));
        // $result=$query->result();
        // return $result;  
       
		$this->db->select('kidney.id,kidney.in, kidney.out, kidney.result, kidney.date_kidney,codeigniter_register.name, kidney.intensity_pa,kidney.number_kidney,kidney.quantity_liq');
        $this->db->from('kidney');

        $this->db->join('codeigniter_register', 'codeigniter_register.id = kidney.staff_id' );
       
        $this->db->where('kidney.patient_id',$patient_id);
        // $this->db->group_by('kidney.date_kidney');
       
        // $this->db->where('kidney.date_kidney',$date_kidney);
    
        $query = $this->db->get();

        // if($query->num_rows()>0){
        return $query->result();
    //    }else{
        // return false;
    //    }
	}
	public function get_show_kidney($patient_id,$date_kidney)
	{
		$this->db->select('kidney.id,kidney.in, kidney.out, kidney.result, kidney.date_kidney,codeigniter_register.name, kidney.intensity_pa,kidney.number_kidney,kidney.quantity_liq');
        $this->db->from('kidney');

        $this->db->join('codeigniter_register', 'codeigniter_register.id = kidney.staff_id' );
       
        $this->db->where('kidney.patient_id',$patient_id);
        $this->db->where('kidney.date_kidney',$date_kidney);
    
        $query = $this->db->get();

        // if($query->num_rows()>0){
        return $query->result();
    //    }else{
        // return false;
    //    }
    }
    
    public function destroy($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kidney');
    }


}