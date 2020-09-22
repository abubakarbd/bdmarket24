<?php 
defined('BASEPATH') OR exit('No direct scripet access allowed');

 class Reports extends CI_controller {
     
     public function index()
    {
        $data['title'] = "Reports";
        $data['main_content'] = $this->load->view('Admin_pages/reports', '', TRUE);
        $this->load->view('admin_master', $data);
    }
     
     
 }