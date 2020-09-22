<?php 
defined('BASEPATH') OR exit('No direct scripet access allowed');

 class Admin_login extends CI_controller {
     
     public function __construct()
     {
         parent::__construct();
         $this->load->model('admin_model');
     }
    
    
    //Admin Login Form Start
    public function index()
    {
        if(isset($this->session->admin_id)){
            redirect('dashboard');
        }else{
            $data['title'] = "Login";
            $this->load->view('admin_login', $data); 
        }
        
    }
    
    
    //Admin Login Function Start
    
    public function login_check()
    {
        $admin_mobile = $this->input->post('admin_mobile', TRUE);
        $admin_password = $this->input->post('admin_password', TRUE);
        
        
       $admin_data = $this->admin_model->login_check($admin_mobile);
       
       
       if($admin_data){
       if(password_verify($admin_password, $admin_data->admin_password)){
            if($admin_data->admin_status == 0){
                $data['title'] = "Admin - Login";
	            $data['massage'] = '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><i class="icon fa fa-ban"></i> This Admin is Deleted! Contact Super Admin. Thank u........</p></div>';
	    	$this->load->view('admin_login',$data);
            }elseif($admin_data->admin_status == 2){
                $data['title'] = "Admin - Login";
	            $data['massage'] = '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><i class="icon fa fa-warning"></i> This Admin is disabled! Contact Super Admin. Thank u........</p></div>';
	    	$this->load->view('admin_login',$data);
            }elseif($admin_data->admin_role == 1){
                
                $session_data['admin_name'] = $admin_data->admin_name;
                $session_data['admin_mobile'] = $admin_data->admin_mobile;
                $session_data['admin_status'] = $admin_data->admin_status;
                $session_data['admin_role'] = $admin_data->admin_role;
                $session_data['admin_id'] = $admin_data->admin_id;
                
                $this->session->set_userdata($session_data);
                redirect('dashboard');
            }elseif($admin_data->admin_role == 2){
                echo "Editor";
            }else{
                $data['title'] = "Admin - Login";
	            $data['massage'] = '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><i class="icon fa fa-ban"></i> Please check your information.!</p></div>';
	    	    $this->load->view('admin_login',$data);
            }
            
       }else{
            $data['title'] = "Admin - Login";
	        $data['massage'] = '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><i class="icon fa fa-ban"></i> Please check your information.!</p></div>';
	    	    $this->load->view('admin_login',$data);
       }
       }else{
           $data['title'] = "Admin - Login";
	        $data['massage'] = '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><i class="icon fa fa-ban"></i> Please check your information.!</p></div>';
	    	    $this->load->view('admin_login',$data);
       } 
    }
    
    //Admin Login Function end
    
    public function check_admin_logut()
    {
        $this->session->sess_destroy();
        redirect('admin-login');
    }
   

    
    
}