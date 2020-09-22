<?php 
defined('BASEPATH') OR exit('No direct scripet access allowed');

 class Admin_model extends CI_model {
     
     public function login_check($admin_mobile)
     {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_mobile', $admin_mobile);
        $query_result = $this->db->get();
        $result = $query_result->row();
        
        return $result;
     }
     
     
     
 }