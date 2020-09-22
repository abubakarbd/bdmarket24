<?php 
defined('BASEPATH') OR exit('No direct scripet access allowed');

 class All_delete extends CI_controller {
     
     public function __construct()
     {
         parent::__construct();
         $this->load->model('all_delete_model');
         if(!isset($this->session->admin_id) && ($this->session->admin_role != 1)){
             redirect('admin-login');
         }
     }
    

   public function all_delete()
    {
            $data['all_brand'] = $this->all_delete_model->brand_show();
            $data['all_category'] = $this->all_delete_model->category_show();
            $data['all_product'] = $this->all_delete_model->product_show();
            $data['title'] = "All Delete";
            $data['main_content'] = $this->load->view('Admin_pages/all_delete', $data, TRUE);
            $this->load->view('admin_master', $data); 
        
    }
    
    public function brand($brand_id, $delete)
     {
         $this->all_delete_model->brand($brand_id, $delete);
         redirect('all-delete');
     }
     
     public function brand_delete($brand_id)
     {
         $this->all_delete_model->brand_delete($brand_id);
         redirect('all-delete');
     }
     
     //Category Function
     
     public function category($category_id, $delete)
     {
         $this->all_delete_model->category($category_id, $delete);
         redirect('all-delete');
     }
     
     public function category_delete($category_id)
     {
         $this->all_delete_model->category_delete($category_id);
         redirect('all-delete');
     }

     //product Function
     
     public function product($product_id, $delete)
     {
         $this->all_delete_model->product($product_id, $delete);
         redirect('all-delete');
     }
     
     public function product_delete($product_id)
     {
         $this->all_delete_model->product_delete($product_id);
         redirect('all-delete');
     }
    
}