<?php 

defined('BASEPATH') OR exit('No direct scripet access allowed');

 class Brand_model extends CI_model {
     
     public function upload_image()
     {
         $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);
        
        if ($this->upload->do_upload('brand_image'))
        {
            $data =  $this->upload->data();   

            $image_path = "uploads/$data[file_name]";
            return $image_path;
        }else{
            $error = $this->upload->display_errors();
            print_r($error);
        }
     }
     
     public function brand_save()
     {
        $brand_info = $this->input->post(NULL, TRUE);
        
        $brand_info['brand_image'] = $this->upload_image();
        
        $this->db->insert('tbl_brand', $brand_info);
       
     }
     
     public function brand_show()
     {
         $this->db->select('*');
         $this->db->from('tbl_brand');
         $this->db->where('brand_status !=', 9);
         $query_result = $this->db->get();
         $result = $query_result->result();
         return $result;
          
     }
     
     public function brand_activ()
     {
         $this->db->select('*');
         $this->db->from('tbl_brand');
         $this->db->where('brand_status', 1);
         $query_result = $this->db->get();
         $result = $query_result->result();
         return $result;
          
     }
     
     public function brand_status($brand_id, $status)
     {
         $data['brand_status'] = $status;
         $this->db->where('brand_id', $brand_id);
         $this->db->update('tbl_brand', $data);
         
     }
     
     public function brand_delete($brand_id, $delete)
     {
         $data['brand_status'] = $delete;
         $this->db->where('brand_id', $brand_id);
         $this->db->update('tbl_brand', $data);
     }
     
     public function brand_edit_id($brand_id)
     {
         $this->db->select('*');
         $this->db->from('tbl_brand');
         $this->db->where('brand_id', $brand_id);
         $query_result = $this->db->get();
         $result = $query_result->row();
         return $result;
          
     }
     
     public function brand_edit()
     {
         
        $data = $this->input->post(NULL, TRUE);
        $brand_id = $data['brand_id'];
        unset($data['brand_id']);
        
        //$data['brand_image'] = $this->upload_image();
        
        $this->db->where('brand_id', $brand_id);
        $this->db->update('tbl_brand', $data); 
     
    
        
        
       
     }
     
     
     
 }