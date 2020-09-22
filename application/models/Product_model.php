<?php 
defined('BASEPATH') OR exit('No direct scripet access allowed');

 class Product_model extends CI_model {
     
     public function upload_image()
     {
         $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);
        
        if ($this->upload->do_upload('product_image'))
        {
            $data =  $this->upload->data();   

            $image_path = "uploads/$data[file_name]";
            return $image_path;
        }else{
            $error = $this->upload->display_errors();
            print_r($error);
        }
     }
     
     public function product_save()
     {
        $product_info = $this->input->post(NULL, TRUE);
        
        $product_info['product_image'] = $this->upload_image();
        
        $this->db->insert('tbl_product', $product_info);
       
     }
     
     public function product_show()
     {
         $this->db->select('*');
         $this->db->from('tbl_product');
         $this->db->where('product_status !=', 9);
         $query_result = $this->db->get();
         $result = $query_result->result();
         return $result;
          
     }
     
     public function product_activ()
     {
         $this->db->select('*');
         $this->db->from('tbl_product');
         $this->db->where('product_status', 1);
         $query_result = $this->db->get();
         $result = $query_result->result();
         return $result;
          
     }
     
     public function product_status($product_id, $status)
     {
         $data['product_status'] = $status;
         $this->db->where('product_id', $product_id);
         $this->db->update('tbl_product', $data);
         
     }
     
     public function product_delete($product_id, $delete)
     {
         $data['product_status'] = $delete;
         $this->db->where('product_id', $product_id);
         $this->db->update('tbl_product', $data);
     }
     
     public function product_edit_id($product_id)
     {
         $this->db->select('*');
         $this->db->from('tbl_product');
         $this->db->where('product_id', $product_id);
         $query_result = $this->db->get();
         $result = $query_result->row();
         return $result;
          
     }
     
     public function product_edit()
     {
         
        $data = $this->input->post(NULL, TRUE);
        $product_id = $data['product_id'];
        unset($data['product_id']);
        
        //$data['product_image'] = $this->upload_image();
        
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product', $data); 
     
    
        
        
       
     }
     
     
     
 }