<?php

defined('BASEPATH') OR exit('No direct scripet access allowed');

 class Brand extends CI_controller {
     
     public function __construct()
     {
         parent::__construct();
          $this->load->model('brand_model');
           if(!isset($this->session->admin_id) && ($this->session->admin_role != 1)){
             redirect('admin-login');
         }
         
         
     }
     
     public function index()
     {
         $data['all_brand'] = $this->brand_model->brand_show();
         $data['title'] = "Brand List";
         $data['main_content'] = $this->load->view('Admin_pages/brand', $data, TRUE);
         $this->load->view('admin_master', $data);
     }
     
     public function brand_add()
     {
         $data['title'] = "Brand Add";
         $data['main_content'] = $this->load->view('Admin_pages/brand_add', $data, TRUE);
         $this->load->view('admin_master', $data);
     }
     
     public function brand_save()
     {
         $this->form_validation->set_rules('brand_name', 'Brand Name', 'required|is_unique[tbl_brand.brand_name]',
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
             
             $this->brand_model->brand_save();
         $data['msg'] = '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><i class="icon fa fa-check"></i> Success alert preview. This alert is dismissable.!</p></div>';
         $data['title'] = "Brand Add";
         $data['main_content'] = $this->load->view('Admin_pages/brand_add', $data, TRUE);
         $this->load->view('admin_master', $data);
         }else{
             $this->brand_add();
         }
           
     }
     
     public function brand_status($brand_id, $status)
     {
         $this->brand_model->brand_status($brand_id, $status);
         redirect('brand');
     }
     
     public function brand_delete($brand_id, $delete)
     {
         $this->brand_model->brand_delete($brand_id, $delete);
         redirect('brand');
     }
     
     public function brand_edit_id($brand_id)
     {
         $data['brand_id'] = $this->brand_model->brand_edit_id($brand_id);
         
         $data['title'] = "Edit Brand";
         $data['main_content'] = $this->load->view('Admin_pages/brand_edit', $data, TRUE);
         $this->load->view('admin_master', $data);
     }
     
     public function brand_edit()
     {
       $this->form_validation->set_rules('brand_name', 'Brand Name', 'required',
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
             
             $this->brand_model->brand_edit();
         redirect('brand');
         }else{
             redirect('brand');
         }
             
             
 
             
         
           
     }
     



 
 }