<?php
class User_management_model extends CI_Model
{
    public function __construct()
	{
	//call CodeIgniter's default Constructor
	//parent::__construct();
	
	//load database libray manually
	$this->load->database();
    }

    function verified($data,$staff_id)
    {
        // return $this->db->insert('codeigniter_register', $data);

        $this->db->where('id',$staff_id);
        return $this->db->update('codeigniter_register', $data);
    }
        

    public function show_all_users()
    {

        $query = $this->db->get('codeigniter_register');
        return $result=$query->result();
   
        
    }

    public function show_user_info($id)
    {
        $query = $this->db->get_where('codeigniter_register',array('id'=>$id));
        $result=$query->row();
        return $result;    
    }

    
 

}

?>