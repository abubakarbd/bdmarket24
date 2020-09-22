<?php 
defined('BASEPATH') OR exit ('No direct scripet access allowed');

 class Coupons extends CI_controller {
     
     public function index()
     {
         $data['title'] = "Coupons";
        $data['main_content'] = $this->load->view('Admin_pages/coupons', '', TRUE);
        $this->load->view('admin_master', $data);
     }
     
     public function coupons_add()
     {
         $data['title'] = "Coupons Add";
        $data['main_content'] = $this->load->view('Admin_pages/coupons_add', '', TRUE);
        $this->load->view('admin_master', $data);
     }
     
     
     
     
 }