<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Images extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
	//call CodeIgniter's default Constructor
		parent::__construct();
        $this->load->library('upload');
        $this->load->model('images_model');
        $this->load->helper(array('form', 'url','text'));
        
    }

    public function save_images()
    {
        
        $id_patient = $this->input->post('id_patient');
        $patient_id =(int) $id_patient;
        $id_staff = $this->input->post('id_staff');
        $staff_id = (int)$id_staff;
        // $name_images=$this->input->post('name_images');
        // $name_images=$this->input->post('images');
        
        // $config = array(
        //     'upload_path' => "./uploads/",
        //     'allowed_types' => "gif|jpg|png|jpeg|pdf",
        //     'overwrite' => TRUE
            
        //     );
        //     $this->load->library('upload', $config);
        //     if($this->upload->do_upload())
        //     {
        //         $data = array('upload_data' => $this->upload->data());
        //         $this->images_model->save_images($patient_id,$staff_id,$name_images);
        //         //$this->load->view('upload_success',$data);
        //     }
        //     else
        //     {
        //         $error = array('error' => $this->upload->display_errors());
        //         //$this->load->view('custom_view', $error);
        //     }
        $image = base64_decode($this->input->post("images"));
        // $image_name = md5(uniqid(rand(), true));
        $str_name =  (string)$id_patient.(string)$id_staff. date("Y-m-d H:i:s");
        $image_name=md5($str_name);
        $caption=$this->input->post('name_images');

        // $image_name= iconv("utf-8", "cp936", $image_name);
        $filename = $image_name. '.' .'jpg';
        //rename file name with random number
        // $path = base_url("patient_img/".$filename);
        $path = "patient_img/";
        //image uploading folder path
        file_put_contents($path . $filename, $image);
        // image is bind and upload to respective folder

        //$data_insert = array('front_img'=>$filename);

        $success = $this->images_model->save_images($patient_id,$staff_id,$image_name,$caption);
        if($success){
            $b = "User Registered Successfully..";
        }
        else
        {
            $b = "Some Error Occured. Please Try Again..";
        }
        echo json_encode($b);
        

    }

}
?>