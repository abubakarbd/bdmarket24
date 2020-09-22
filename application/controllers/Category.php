<?php

defined('BASEPATH') OR exit('No direct scripet access allowed');

 class Category extends CI_controller {
     
     public function __construct()
     {
         parent::__construct();
            $this->load->model('category_model');
           if(!isset($this->session->admin_id) && ($this->session->admin_role != 1)){
             redirect('admin-login');
         }
         
          
     }
     
     public function index()
     {
         $data['all_category'] = $this->category_model->category_show();
         $data['title'] = "Category List";
         $data['main_content'] = $this->load->view('Admin_pages/category', $data, TRUE);
         $this->load->view('admin_master', $data);
     }
     
     public function category_add()
     {
         $data['activ_category'] = $this->category_model->category_activ();
         $data['title'] = "Category Add";
         $data['main_content'] = $this->load->view('Admin_pages/category_add', $data, TRUE);
         $this->load->view('admin_master', $data);
     }
     
     public function category_save()
     {
         $this->form_validation->set_rules('category_name', 'category Name', 'required|is_unique[tbl_category.category_name]',
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
             
             $this->category_model->category_save();
         $data['msg'] = '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><i class="icon fa fa-check"></i> Success alert preview. This alert is dismissable.!</p></div>';
         $data['title'] = "Brand Add";
         $data['main_content'] = $this->load->view('Admin_pages/category_add', $data, TRUE);
         $this->load->view('admin_master', $data);
         }else{
             $this->category_add();
         }
           
     }
     
     public function category_status($category_id, $status)
     {
         $this->category_model->category_status($category_id, $status);
         redirect('category');
     }
     
     public function category_delete($category_id, $delete)
     {
         $this->category_model->category_delete($category_id, $delete);
         redirect('category');
     }
     
     public function category_edit_id($category_id)
     {
         $data['category_id'] = $this->category_model->category_edit_id($category_id);
         $data['activ_category'] = $this->category_model->category_activ();
         
         $data['title'] = "Edit category";
         $data['main_content'] = $this->load->view('Admin_pages/category_edit', $data, TRUE);
         $this->load->view('admin_master', $data);
     }
     
     public function category_edit()
     {
       $this->form_validation->set_rules('category_name', 'category Name', 'required',
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
             
             $this->category_model->category_edit();
         redirect('category');
         }else{
             redirect('category');
         }
             
             
 
             
         
           
     }
     



 
 }