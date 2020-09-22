 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Product</li>
        <li><a class="text-teal" href="<?php echo base_url();?>add-product"><i class="fa fa-fw fa-user-plus"></i>Create New</a></li>
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
                     <form action="" method="POST">
                        <div class="form-group">
                            <input type="date" name="date" class="form-control" onchange="this.form.submit();">
                        </div>
                    </form>
            </div>
              <div class="box-tools pull-right">
            <button type="button" class="btn btn-success btn-sm disabled"><i class="fa fa-print"></i> Print </button>
            <button type="button" class="btn btn-primary btn-sm disabled"><i class="fa fa-upload"></i> Import </button>
            <button type="button" class="btn btn-info btn-sm disabled"><i class="fa fa-download"></i> Export </button>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Brand</th>
                  <th>Category</th>
                  <th>Stock qty</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($all_product as $product){ ?>
                <tr>
                  <td>01</td>
                  <td><img src="<?php echo base_url(). $product->product_image;?>" width="70" height="70"></td>
                  <td><?php echo $product->product_name;?></td>
                  <td><?php echo $product->product_rprice;?><br><?php echo $product->product_price;?></td>
                  <td><?php echo $product->product_brand;?></td>
                  <td><?php echo $product->product_category;?></td>
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
                      <?php if($product->product_status == 1){?>
                    <div class="btn-group">
                      <a onclick="alert('You really want to Inactive')" href="<?php echo base_url("product-status/$product->product_id/2");?>"><button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                        <i class="fa fa-fw fa-thumbs-up text-green"></i></button></a>
                    </div>
                    <?php }elseif($product->product_status == 2){?>
                    <div class="btn-group">
                      <a onclick="alert('You really want to Activ')" href="<?php echo base_url("product-status/$product->product_id/1");?>"><button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                        <i class="fa fa-fw fa-thumbs-down text-red"></i></button></a>
                    </div>
                    <?php }?>
                    <div class="btn-group">
                      <a onclick="alert('You really want to Edit')" href="<?php echo base_url("product-edit/$product->product_id");?>"><button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Edit">
                        <i class="fa fa-edit"></i></button></a>
                    </div>
                    <div class="btn-group">
                      <a onclick="alert('You really want to Delete')" href="<?php echo base_url("product-delete/$product->product_id/9");?>"><button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
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
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 