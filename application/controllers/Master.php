<?php 
defined('BASEPATH') OR exit('No direct scripet access allowed');

 class Master extends CI_controller {
     
     public function index()
     {
         $data['title'] = "Home || BDMarket24";
         $data['notification'] = $this->load->view('Customer_pages/notification', '', TRUE);
         $data['header'] = $this->load->view('Customer_pages/header', $data, TRUE);
         $data['category_menu'] = $this->load->view('Customer_pages/category_menu', '', TRUE);
         $data['slider_area'] = $this->load->view('Customer_pages/slider_area', '', TRUE);
         $data['banner_area'] = $this->load->view('Customer_pages/banner_area', '', TRUE);
         $data['popular_product'] = $this->load->view('Customer_pages/popular_product', '', TRUE);
         $data['top_products'] = $this->load->view('Customer_pages/top_products', '', TRUE);
         $data['banner_area_a'] = $this->load->view('Customer_pages/banner_area_a', '', TRUE);
         $data['best_selling_area'] = $this->load->view('Customer_pages/best_selling_area', '', TRUE);
         $data['banner_area_b'] = $this->load->view('Customer_pages/banner_area_b', '', TRUE);
         $data['products_area'] = $this->load->view('Customer_pages/products_area', '', TRUE);
         $data['partner_area'] = $this->load->view('Customer_pages/partner_area', '', TRUE);
         $this->load->view('master_pages', $data);
     }
     
     public function product_details()
     {
         $data['title'] = "product_details";
         $data['main_content'] = $this->load->view('Customer_pages/product_details', $data, TRUE);
         $this->load->view('master_details', $data);
     }
     
     public function wishlist()
     {
         $data['title'] = "wishlist Add";
         $data['main_content'] = $this->load->view('Customer_pages/wishlist', $data, TRUE);
         $this->load->view('master_details', $data);
     }
     
     public function login()
     {
         $data['title'] = "login";
         $data['main_content'] = $this->load->view('Customer_pages/login', $data, TRUE);
         $this->load->view('master_details', $data);
     }
     
     public function register()
     {
         $data['title'] = "register";
         $data['main_content'] = $this->load->view('Customer_pages/register', $data, TRUE);
         $this->load->view('master_details', $data);
     }
     
     public function cart()
     {
         $data['title'] = "cart";
         $data['main_content'] = $this->load->view('Customer_pages/cart', $data, TRUE);
         $this->load->view('master_details', $data);
     }
     
     public function checkout()
     {
         $data['title'] = "checkout";
         $data['main_content'] = $this->load->view('Customer_pages/checkout', $data, TRUE);
         $this->load->view('master_details', $data);
     }
     
     public function contact()
     {
         $data['title'] = "contact";
         $data['main_content'] = $this->load->view('Customer_pages/contact', $data, TRUE);
         $this->load->view('master_details', $data);
     }
     
     public function blog()
     {
         $data['title'] = "blog";
         $data['main_content'] = $this->load->view('Customer_pages/blog', $data, TRUE);
         $this->load->view('master_details', $data);
     }
     
     
     public function blog_details()
     {
         $data['title'] = "blog_details";
         $data['main_content'] = $this->load->view('Customer_pages/blog_details', $data, TRUE);
         $this->load->view('master_details', $data);
     }
     
     public function shop()
     {
         $data['title'] = "shop";
         $data['main_content'] = $this->load->view('Customer_pages/shop', $data, TRUE);
         $this->load->view('master_details', $data);
     }
     
     public function payment()
     {
         $data['title'] = "payment";
         $data['main_content'] = $this->load->view('Customer_pages/payment', $data, TRUE);
         $this->load->view('master_details', $data);
     }

     
     
     
 }