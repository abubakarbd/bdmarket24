<?php 
defined('BASEPATH') OR exit('No direct scripet access allowed');

 class Category_model extends CI_model {
     
     public function upload_image()
     {
         $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);
        
        if ($this->upload->do_upload('category_image'))
        {
            $data =  $this->upload->data();   

            $image_path = "uploads/$data[file_name]";
            return $image_path;
        }else{
            $error = $this->upload->display_errors();
            print_r($error);
        }
     }
     
     public function category_save()
     {
        $category_info = $this->input->post(NULL, TRUE);
        
        $category_info['category_image'] = $this->upload_image();
        
        $this->db->insert('tbl_category', $category_info);
       
     }
     
     public function category_show()
     {
         $this->db->select('*');
         $this->db->from('tbl_category');
         $this->db->where('category_status !=', 9);
         $query_result = $this->db->get();
         $result = $query_result->result();
         return $result;
          
     }
     
     public function category_activ()
     {
         $this->db->select('*');
         $this->db->from('tbl_category');
         $this->db->where('category_status', 1);
         $query_result = $this->db->get();
         $result = $query_result->result();
         return $result;
          
     }
     
     public function category_status($category_id, $status)
     {
         $data['category_status'] = $status;
         $this->db->where('category_id', $category_id);
         $this->db->update('tbl_category', $data);
         
     }
     
     public function category_delete($category_id, $delete)
     {
         $data['category_status'] = $delete;
         $this->db->where('category_id', $category_id);
         $this->db->update('tbl_category', $data);
     }
     
     public function category_edit_id($category_id)
     {
         $this->db->select('*');
         $this->db->from('tbl_category');
         $this->db->where('category_id', $category_id);
         $query_result = $this->db->get();
         $result = $query_result->row();
         return $result;
          
     }
     
     public function category_edit()
     {
         
        $data = $this->input->post(NULL, TRUE);
        $category_id = $data['category_id'];
        unset($data['category_id']);
        
        //$data['brand_image'] = $this->upload_image();
        
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category', $data); 
     
    
        
        
       
     }
     
     
     
 }