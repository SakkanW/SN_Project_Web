<?php
class Test_model extends CI_Model
{
    public function __construct()
	{
	//call CodeIgniter's default Constructor
	//parent::__construct();
	
	//load database libray manually
	$this->load->database();
    }

    public function test_user()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );
    
          return $this->db->insert('test_user', $data);
    }
    public function show()
    {
        $show = $this->db->get_where('test_user');
        $result= $show->result();
        return $result;
    }
}

?>