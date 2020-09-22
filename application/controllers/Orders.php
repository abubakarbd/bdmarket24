<?php 
defined('BASEPATH') OR exit('No direct scripet access allowed');

 class Orders extends CI_controller {
     
     public function index()
    {
        $data['title'] = "orders";
        $data['main_content'] = $this->load->view('Admin_pages/orders', '', TRUE);
        $this->load->view('admin_master', $data);
    }
     
     
 }