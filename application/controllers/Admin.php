<?php 
defined('BASEPATH') OR exit('No direct scripet access allowed');

 class Admin extends CI_controller {
     
     public function __construct()
     {
         parent::__construct();
         $this->load->model('admin_model');
         if(!isset($this->session->admin_id) && ($this->session->admin_role != 1)){
             redirect('admin-login');
         }
     }
    
    public function show_dashboard()
    {
            $data['title'] = "Dashboard";
            $data['main_content'] = $this->load->view('Admin_pages/dashboard', '', TRUE);
            $this->load->view('admin_master', $data); 
        
    }

   public function all_delete()
    {
            $data['title'] = "All Delete";
            $data['main_content'] = $this->load->view('Admin_pages/all_delete', '', TRUE);
            $this->load->view('admin_master', $data); 
        
    }

    
    
}