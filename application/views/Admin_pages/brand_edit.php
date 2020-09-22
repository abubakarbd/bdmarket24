
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Edit Brand
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin')?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo base_url('brand')?>"><i class="fa fa-fw fa-bars"></i> Brand</a></li>
        <li class="active">Brand Edit</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Brand</h3>
          

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <p>
            <?php if(isset($msg)){  echo $msg;	}?>
          </p>
        <!-- /.box-header -->
        <?php echo form_open_multipart('edit-brand', 'class=form-horizontal');?>
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                <div class="col-md-6 form-group group-mail">
                <label class="control-label">Name <span class="text-red">*</span></label>
        	    <div class="input-group">
        			<span class="input-group-addon">
        				<i class="fa fa-user"></i>
        			</span>
		        	<input type="text" name="brand_name"  class="form-control" id="i_name" value="<?php echo $brand_id->brand_name;?>">
	        	</div>
		        <?php echo form_error('brand_name'); ?>
                </div>
                
                <div class="col-md-6 form-group group-mail">
                <label class="control-label">Image</label>
        	    <div class="input-group">
        			<span class="input-group-addon">
        			<i class="fa fa-picture-o"></i>
        			</span>
        			<input type="file" name="brand_image" class="form-control" id="focusedinput">
	        	</div>
		
                </div>
   
             <div class="col-md-10">
                <label class="control-label">Description</label>
                <textarea id="editor1" name="brand_description" rows="10" cols="80">
                    <?php echo $brand_id->brand_description;?>
                </textarea>
                </div>
                <div class="col-md-2 form-group group-mail">
                    <img src="<?php echo base_url(). $brand_id->brand_image;?>" width="70" height="70">
                    </div>
                    <input type="hidden" name="brand_id" value="<?php echo $brand_id->brand_id;?>">
             </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <div class="row">
		<div class="col-sm-12 col-sm-offset-2">
			<button class="btn-primary btn">Submit</button>
			<button class="btn-default btn">Cancel</button>
			<button class="btn-inverse btn">Reset</button>
		</div>
	</div>
        </div>
        <?php echo form_close();?>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
