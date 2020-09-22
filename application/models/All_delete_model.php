<?php 

defined('BASEPATH') OR exit('No direct scripet access allowed');

 class All_delete_model extends CI_model {
     
     
     public function brand_show()
     {
         $this->db->select('*');
         $this->db->from('tbl_brand');
         $this->db->where('brand_status', 9);
         $query_result = $this->db->get();
         $result = $query_result->result();
         return $result;
          
     }
     
     
     public function brand($brand_id, $delete)
     {
         $data['brand_status'] = $delete;
         $this->db->where('brand_id', $brand_id);
         $this->db->update('tbl_brand', $data);
     }
     
     public function brand_delete($brand_id)
     {
         $this->db->where('brand_id', $brand_id);
         $this->db->delete('tbl_brand');
     }
     
     // Category Function
     
     public function category_show()
     {
         $this->db->select('*');
         $this->db->from('tbl_category');
         $this->db->where('category_status', 9);
         $query_result = $this->db->get();
         $result = $query_result->result();
         return $result;
          
     }
     
     public function category($category_id, $delete)
     {
         $data['category_status'] = $delete;
         $this->db->where('category_id', $category_id);
         $this->db->update('tbl_category', $data);
     }
     
     public function category_delete($category_id)
     {
         $this->db->where('category_id', $category_id);
         $this->db->delete('tbl_category');
     }
     
         // product Function
     
     public function product_show()
     {
         $this->db->select('*');
         $this->db->from('tbl_product');
         $this->db->where('product_status', 9);
         $query_result = $this->db->get();
         $result = $query_result->result();
         return $result;
          
     }
     
     public function product($product_id, $delete)
     {
         $data['product_status'] = $delete;
         $this->db->where('product_id', $product_id);
         $this->db->update('tbl_product', $data);
     }
     
     public function product_delete($product_id)
     {
         $this->db->where('product_id', $product_id);
         $this->db->delete('tbl_product');
     }
      
     
 }