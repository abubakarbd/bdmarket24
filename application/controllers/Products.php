<?php 
defined('BASEPATH') OR exit('No direct scripet access allowed');

 class Products extends CI_controller{
     
     public function __construct()
     {
         parent::__construct();
            $this->load->model('product_model');
            $this->load->model('brand_model');
            $this->load->model('category_model');
           if(!isset($this->session->admin_id) && ($this->session->admin_role != 1)){
             redirect('admin-login');
         }
         
          
     }
     
     public function index()
     {
         $data['title'] = "Products";
         $data['all_product'] = $this->product_model->product_show();
         $data['main_content'] = $this->load->view('Admin_pages/products', $data, TRUE);
         $this->load->view('admin_master', $data);
     }
     
     public function product_add()
     {
         $data['title'] = "Product Add"; 
         $data['activ_brand'] = $this->brand_model->brand_activ();
         $data['activ_category'] = $this->category_model->category_activ();
         $data['main_content'] = $this->load->view('Admin_pages/products_add', $data, TRUE);
         $this->load->view('admin_master', $data);
     }
     
     
     public function product_save()
     {
         $this->form_validation->set_rules('product_name', 'product Name', 'required|is_unique[tbl_product.product_name]',
         array(
                'required' => '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><i class="icon fa fa-warning"></i>Must give a brand name %s!</p></div>',
                
                'is_unique' => '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><i class="icon fa fa-warning"></i> This %s has been used before!</p></div>'
             )
         );
         $this->form_validation->set_rules('product_price', 'Product Price', 'required',
         array(
                'required' => '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><i class="icon fa fa-warning"></i>Must give %s!</p></div>',
                
             )
         );
         
         if($this->form_validation->run()){
             
             $this->product_model->product_save();
         $data['msg'] = '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><i class="icon fa fa-check"></i> Success alert preview. This alert is dismissable.!</p></div>';
         $data['title'] = "/Product Add";
         $data['main_content'] = $this->load->view('Admin_pages/products_add', $data, TRUE);
         $this->load->view('admin_master', $data);
         }else{
             $this->product_add();
         }
           
     }
     
     public function product_status($product_id, $status)
     {
         $this->product_model->product_status($product_id, $status);
         redirect('product');
     }
     
     public function product_delete($product_id, $delete)
     {
         $this->product_model->product_delete($product_id, $delete);
         redirect('product');
     }
     
     public function product_edit_id($product_id)
     {
         $data['product_id'] = $this->product_model->product_edit_id($product_id);
         $data['activ_product'] = $this->product_model->product_activ();
         $data['activ_brand'] = $this->brand_model->brand_activ();
         $data['activ_category'] = $this->category_model->category_activ();
         
         $data['title'] = "Edit product";
         $data['main_content'] = $this->load->view('Admin_pages/product_edit', $data, TRUE);
         $this->load->view('admin_master', $data);
     }
     
     public function product_edit()
     {
       $this->form_validation->set_rules('product_name', 'product Name', 'required',
         array(
                'required' => '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><i class="icon fa fa-warning"></i>Must give a brand name %s!</p></div>',
                
                'is_unique' => '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><i class="icon fa fa-warning"></i> This %s has been used before!</p></div>'
             )
         );
         
         if($this->form_validation->run()){
             
             $this->product_model->product_edit();
         redirect('product');
         }else{
             redirect('product');
         }

     }
     
 }