<?php
class CreatePatient_model extends CI_Model {

    public function save_create_patient()
    {
        $this->load->helper('url');
    
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
    
        $data = array(
            'fname' => $this->input->post('firstname'),
            'lname' => $this->input->post('lastname'),
            'idcard' => $this->input->post('idcard'),
            'birthday' => $this->input->post('birthday'),
            'weight' => $this->input->post('weight'),
            'height' => $this->input->post('height'),
            'bloodsugar' => $this->input->post('blood'),
            'family_num' => $this->input->post('num_family'),
            'family_status' => $this->input->post('text'),
            'start_capd' => $this->input->post('text'),
            'system_use' => $this->input->post('text'),
            'intensity' => $this->input->post('text'),
            'number' => $this->input->post('text')
        );
    
        return $this->db->insert('patient', $data);
    }

}