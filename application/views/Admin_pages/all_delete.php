 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Delete
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"> All Delete</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            
         <div class="box">
            <div class="box-header">
                <div class="col-md-12">
                    <div class="pull-left col-md-2" style="padding-left:0px">
                     <h3 class="box-title">Brand List</h3>
            </div>
              <div class="box-tools pull-right">
            <button type="button" class="btn btn-success btn-sm disabled"><i class="fa fa-print"></i> Print </button>
            <button type="button" class="btn btn-primary btn-sm disabled"><i class="fa fa-upload"></i> Import </button>
            <button type="button" class="btn btn-info btn-sm disabled"><i class="fa fa-download"></i> Export </button>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
     
                <?php foreach ($all_brand as $brand){ ?>
                <tr>
                  <td>01</td>
                  <td><?php echo $brand->brand_name;?></td>
                  <td>Brand Image</td>
                  <td>Description</td>
                  <td>
                      <?php if($brand->brand_status == 1){?>
                      <span class="label label-success">Activ</span>
                      <?php }else{?>
                      <span class="label label-danger">Inactive</span>
                      <?php }?>
                  </td>
                  <td>
                  <div class="mailbox-controls with-border text-center">
                    <div class="btn-group">
                      <a onclick="alert('You really want to delete')" href="<?php echo base_url("delete-brand/$brand->brand_id/1");?>"><button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Undo">
                        <i class="fa fa-fw fa-undo"></i></button></a>
                        <a onclick="alert('You really want to Delete')" href="<?php echo base_url("delete-brand-delete/$brand->brand_id");?>"><button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                        <i class="fa fa-trash-o"></i></button></a>
                    </div>
                  </div>
                  </td>
                </tr>
                <?php }?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        
        <!---------------------------------------------------------- end brand--------------------------------------->
        
        
        <!---------------------------------------------------------- start Category--------------------------------------->
        
        <div class="box">
            <div class="box-header">
                <div class="col-md-12">
                    <div class="pull-left col-md-2" style="padding-left:0px">
                     <h3 class="box-title">Category List</h3>
            </div>
              <div class="box-tools pull-right">
            <button type="button" class="btn btn-success btn-sm disabled"><i class="fa fa-print"></i> Print </button>
            <button type="button" class="btn btn-primary btn-sm disabled"><i class="fa fa-upload"></i> Import </button>
            <button type="button" class="btn btn-info btn-sm disabled"><i class="fa fa-download"></i> Export </button>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example3" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
     
                <?php foreach ($all_category as $category){ ?>
                <tr>
                  <td>01</td>
                  <td><?php echo $category->category_name;?></td>
                  <td>Brand Image</td>
                  <td>Description</td>
                  <td>
                      <?php if($category->category_status == 1){?>
                      <span class="label label-success">Activ</span>
                      <?php }else{?>
                      <span class="label label-danger">Inactive</span>
                      <?php }?>
                  </td>
                  <td>
                  <div class="mailbox-controls with-border text-center">
                    <div class="btn-group">
                      <a onclick="alert('You really want to delete')" href="<?php echo base_url("delete-category/$category->category_id/1");?>"><button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Undo">
                        <i class="fa fa-fw fa-undo"></i></button></a>
                        <a onclick="alert('You really want to Delete')" href="<?php echo base_url("delete-category-delete/$category->category_id");?>"><button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                        <i class="fa fa-trash-o"></i></button></a>
                    </div>
                  </div>
                  </td>
                </tr>
                <?php }?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        
        <!---------------------------------------------------------- end brand--------------------------------------->
        
        
        <!---------------------------------------------------------- start Category--------------------------------------->
        
        <div class="box">
            <div class="box-header">
                <div class="col-md-12">
                    <div class="pull-left col-md-2" style="padding-left:0px">
                     <h3 class="box-title">Product List</h3>
            </div>
              <div class="box-tools pull-right">
            <button type="button" class="btn btn-success btn-sm disabled"><i class="fa fa-print"></i> Print </button>
            <button type="button" class="btn btn-primary btn-sm disabled"><i class="fa fa-upload"></i> Import </button>
            <button type="button" class="btn btn-info btn-sm disabled"><i class="fa fa-download"></i> Export </button>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example5" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
     
                <?php foreach ($all_product as $product){ ?>
                <tr>
                  <td>01</td>
                  <td><?php echo $product->product_name;?></td>
                  <td><img src="<?php echo base_url(). $product->product_image;?>" width="50" height="50"></td>
                  <td><?php echo $product->product_qit;?></td>
                  <td>
                      <?php if($product->product_status == 1){?>
                      <span class="label label-success">Activ</span>
                      <?php }else{?>
                      <span class="label label-danger">Inactive</span>
                      <?php }?>
                  </td>
                  <td>
                  <div class="mailbox-controls with-border text-center">
                    <div class="btn-group">
                      <a onclick="alert('You really want to delete')" href="<?php echo base_url("delete-product/$product->product_id/1");?>"><button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Undo">
                        <i class="fa fa-fw fa-undo"></i></button></a>
                        <a onclick="alert('You really want to Delete')" href="<?php echo base_url("delete-product-delete/$product->product_id");?>"><button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                        <i class="fa fa-trash-o"></i></button></a>
                    </div>
                  </div>
                  </td>
                </tr>
                <?php }?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 