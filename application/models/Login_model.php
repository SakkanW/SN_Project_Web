<?php
class Login_model extends CI_Model
{
 function can_login($email, $password)
 {
  $this->db->where('email', $email);
  $query = $this->db->get('codeigniter_register');
  if($query->num_rows() > 0)
  {
   foreach($query->result() as $row)
   {
    if($row->is_email_verified == "yes" && $row->status != "พยาบาลอนามัย")
    {
     $store_password = $this->encrypt->decode($row->password);
     if($password == $store_password)
     {
        $newdata = array(
            'id'  => $row->id,
            'name'     => $row->name,
            'position' => $row->position,
            'status'     => $row->status
    );
         
    //   $this->session->set_userdata('id', $row->id ,'name',$row->name);
      $this->session->set_userdata( $newdata);
     }
     else
     {
      return 'รหัสผ่านผิด';
     }
    }
    else
    {
     return 'บัญชีของท่านยังไม่ได้รับการยืนยันจากผู้ดูแลระบบ/ไม่มีสิทธิเข้าใช้งานเว็บไซต์';
    }
   }
  }
  else
  {
   return 'ที่อยู่อีเมลผิดพลาด';
  }
 }


 function can_login_mobile($idcard, $password)
 {
  $this->db->where('idcard', $idcard);
  $query = $this->db->get('patient');
  if($query->num_rows() > 0)
  {
   foreach($query->result() as $row)
   {
    if($row->joined == "yes")
    {
     $store_password = $this->encrypt->decode($row->pass);
     if($password == $store_password)
     {
        $newdata = array(
            'id'  => $row->id,
            'fname'     => $row->fname,
            'lname'     => $row->lname,
            'intensity'     => $row->intensity,
            'number'     => $row->number,
            'updated_at'     => $row->updated_at
            
    );
         
    //   $this->session->set_userdata('id', $row->id ,'name',$row->name);
      $this->session->set_userdata( $newdata);
     }
     else
     {
      return 'รหัสผ่านผิด';
     }
    }
    else
    {
     return 'บัญชีของท่านยังไม่ได้รับการยืนยันจากผู้ดูแลระบบ';
    }
   }
  }
  else
  {
   return 'ที่อยู่อีเมลผิดพลาด';
  }
 }
}

?>