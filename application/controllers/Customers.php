<?php 
defined('BASEPATH') OR exit('No direct scripet access allowed');

 class Customers extends CI_controller{
     
     public function index()
     {
         $data['title'] = "Customers";
         $data['main_content'] = $this->load->view('Admin_pages/customers', $data, TRUE);
         $this->load->view('admin_master', $data);
     }
     
     public function customers_add()
     {
         $data['title'] = "Customers Add";
         $data['main_content'] = $this->load->view('Admin_pages/customers_add', $data, TRUE);
         $this->load->view('admin_master', $data);
     }
     
     
 }