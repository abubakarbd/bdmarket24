<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
// Admin Pagess
$route['reports'] = 'reports';
$route['add-reports'] = 'reports/reports_add';

$route['orders'] = 'orders';
$route['add-orders'] = 'orders/orders_add';

$route['coupons'] = 'coupons';
$route['add-coupons'] = 'coupons/coupons_add';

$route['customers'] = 'customers';
$route['add-customers'] = 'customers/customers_add';

$route['products'] = 'products';
$route['add-products'] = 'products/products_add';


//Product Routes
$route['product'] = 'products';
$route['add-product'] = 'products/product_add';
$route['product-save'] = 'products/product_save';
$route['product-status/(.+)/(.+)'] = 'products/product_status/$1/$2';
$route['product-delete/(.+)/(.+)'] = 'products/product_delete/$1/$2';
$route['product-edit/(.+)'] = 'products/product_edit_id/$1';
$route['edit-product'] = 'products/product_edit';

//Category Routes
$route['category'] = 'category';
$route['add-category'] = 'category/category_add';
$route['category-save'] = 'category/category_save';
$route['category-status/(.+)/(.+)'] = 'category/category_status/$1/$2';
$route['category-delete/(.+)/(.+)'] = 'category/category_delete/$1/$2';
$route['category-edit/(.+)'] = 'category/category_edit_id/$1';
$route['edit-category'] = 'category/category_edit';

//Brand Routes
$route['brand'] = 'brand';
$route['add-brand'] = 'brand/brand_add';
$route['brand-save'] = 'brand/brand_save';
$route['brand-status/(.+)/(.+)'] = 'brand/brand_status/$1/$2';
$route['brand-delete/(.+)/(.+)'] = 'brand/brand_delete/$1/$2';
$route['brand-edit/(.+)'] = 'brand/brand_edit_id/$1';
$route['edit-brand'] = 'brand/brand_edit';

$route['dashboard'] = 'admin/show_dashboard';
$route['admin-logut'] = 'admin_login/check_admin_logut';
$route['admin-login'] = 'admin_login';

// Delete brand
$route['all-delete'] = 'all_delete/all_delete';
$route['delete-brand/(.+)/(.+)'] = 'all_delete/brand/$1/$2';
$route['delete-brand-delete/(.+)'] = 'all_delete/brand_delete/$1';
// Delete category
$route['delete-category/(.+)/(.+)'] = 'all_delete/category/$1/$2';
$route['delete-category-delete/(.+)'] = 'all_delete/category_delete/$1';
// Delete product
$route['delete-product/(.+)/(.+)'] = 'all_delete/product/$1/$2';
$route['delete-product-delete/(.+)'] = 'all_delete/product_delete/$1';


// Coustomer Pagess

$route['product-details'] = 'master/product_details';
$route['wishlist'] = 'master/wishlist';
$route['login'] = 'master/login';
$route['register'] = 'master/register';
$route['cart'] = 'master/cart';
$route['checkout'] = 'master/checkout';
$route['contact'] = 'master/contact';
$route['blog'] = 'master/blog';
$route['blog-details'] = 'master/blog_details';
$route['shop'] = 'master/shop';
$route['payment'] = 'master/payment';


$route['default_controller'] = 'master';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
