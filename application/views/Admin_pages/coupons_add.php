 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Coupones Add
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo base_url();?>coupones"><i class="fa fa-fw fa-bars"></i> Coupones</a></li>
        <li class="active">Coupones Add</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Coupones</h3>
          

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <p>
             
          </p>
        <!-- /.box-header -->
        <form action="" method="POST" class="form-horizontal">
        <div class="box-body">
          <div class="row">
              
            <div class="col-md-12">
                <div class="col-md-4 form-group group-mail">
                 <label class="control-label">Coupone Code <span class="text-red">*</span></label>
        		 <div class="input-group">
        			<span class="input-group-addon">
        				<i class="fa fa-fw fa-at"></i>
        			</span>
        			<input type="text" name="product_name" class="form-control" id="focusedinput" placeholder="Coupone Code">
        		</div>
            </div>
            
            <div class="col-md-4 form-group group-mail">
                 <label class="control-label">Coupon amount <span class="text-red">*</span></label>
        		 <div class="input-group">
        			<span class="input-group-addon">
        				<i class="fa fa-fw fa-money"></i>
        			</span>
        			<input type="text" name="product_name" class="form-control" id="focusedinput" placeholder="Coupone amount">
        		</div>
            </div>
            
            <div class="col-md-4 form-group group-mail">
                 <label class="control-label">Coupon expiry date <span class="text-red">*</span></label>
        		 <div class="input-group">
        			<span class="input-group-addon">
        				<i class="fa fa-calendar"></i>
        			</span>
        			<input type="date" name="product_name" class="form-control" id="focusedinput" placeholder="Coupon expiry date">
        		</div>
            </div>
            
            
            <div class="col-md-12">
                <label class="control-label">Coupon Description</label>
                <textarea id="editor1" name="c_text" rows="10" cols="80"></textarea>
            </div>
         
          </div>
          
          
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <div class="row">
		<div class="col-sm-12 col-sm-offset-2">
			<button name="submit" class="btn-primary btn">Submit</button>
			<button class="btn-default btn">Cancel</button>
			<button class="btn-inverse btn">Reset</button>
		</div>
	</div>
        </div>
        </form>
      </div>
      <!-- /.box -->





    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->