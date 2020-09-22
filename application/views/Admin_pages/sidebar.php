 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Abubakar</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php if($this->uri->segment(1)=="dashboard"){echo "active";}?>" href="<?=base_url('dashboard')?> treeview">
          <a href="<?php echo base_url('dashboard');?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        
            <li class="<?php if($this->uri->segment(1)=="messages"){echo "active";}?>" href="<?=base_url('messages')?>">
             <a href='<?php echo base_url('messages');?>'>
                <i class='fa fa-inbox'></i>
        <span>Messages</span><span class='pull-right label label-primary pull-right'>0</span>
              </a>
            </li>
            <li class="<?php if($this->uri->segment(1)=="brand"){echo "active";}?>" href="<?=base_url('brand')?>">
              <a href='<?php echo base_url();?>brand'>
                <i class='fa fa-get-pocket'></i>
                <span>Brand</span>
              </a>
            </li>
            <li class="<?php if($this->uri->segment(1)=="category"){echo "active";}?>" href="<?=base_url('category')?>">
              <a href='<?php echo base_url();?>category'>
                <i class='fa fa-list-alt'></i>
                <span>Category</span>
              </a>
            </li>
            <li class="<?php if($this->uri->segment(1)=="products"){echo "active";}?>" href="<?=base_url('products')?>">
              <a href='<?php echo base_url();?>products'>
                <i class='fa fa-product-hunt'></i>
                <span>Products</span>
              </a>
            </li>
            <li class="<?php if($this->uri->segment(1)=="customers"){echo "active";}?>" href="<?=base_url('customers')?>">
              <a href='<?php echo base_url();?>customers'>
                <i class='fa fa-users'></i>
                <span>Customers</span>
              </a>
            </li>
            
            <li class="<?php if($this->uri->segment(1)=="coupons"){echo "active";}?>" href="<?=base_url('coupons')?>">
              <a href='<?php echo base_url();?>coupons'>
                <i class='fa fa-tags'></i>
                <span>Coupons</span>
              </a>
            </li>

       
        <li class="header">LABELS</li>
        
         <li class="<?php if($this->uri->segment(1)=="orders"){echo "active";}?>" href="<?=base_url('orders')?>">
          <a href="<?php echo base_url();?>orders">
            <i class="fa fa-fw fa-shopping-cart"></i> <span>Orders</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        
        <li class="<?php if($this->uri->segment(1)=="reports"){echo "active";}?>" href="<?=base_url('reports')?>">
          <a href="<?php echo base_url();?>reports">
            <i class="fa fa-fw fa-bar-chart"></i> <span> Reports</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        
        <li class="<?php if($this->uri->segment(1)=="all-delete"){echo "active";}?>" href="<?=base_url('all-delete')?>">
              <a href='<?php echo base_url();?>all-delete'>
                <i class='fa fa-tags'></i>
                <span>All Delete</span>
              </a>
            </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
 