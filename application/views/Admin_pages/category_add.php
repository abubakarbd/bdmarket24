
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Category
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin')?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo base_url('category')?>"><i class="fa fa-fw fa-bars"></i> Category</a></li>
        <li class="active">Category Add</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Category</h3>
          

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <p><?php if(isset($msg)){echo $msg;}?></p>
        <!-- /.box-header -->
        <?php echo form_open_multipart('category-save', 'class=form-horizontal');?>
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                   <div class="col-md-4 form-group group-mail">
                    <label class="control-label">Category Name <span class="text-red">*</span></label>
                	 <div class="input-group">
            			<span class="input-group-addon">
            				<i class="fa fa-user"></i>
            			</span>
            			<input type="text" name="category_name" class="form-control" id="i_name" placeholder="Enter Brand Name">
                		</div><?php echo form_error('category_name'); ?>
                   </div>
                   
                                 <div class="col-md-4 form-group group-mail">
                     <label class="control-label">Parent Category</label>
                        <select name="category_parent" id="i_month" class="form-control select2" style="width: 100%;">
            			  <option>Select Parent Category</option>
            			  <?php foreach($activ_category as $category){ ?>
            			    <option value="<?php echo $category->category_name;?>"><?php echo $category->category_name;?></option>
            			    <?php }?>
                		</select>
                       </div>
                       
                <div class="col-md-4 form-group group-mail">
                <label class="control-label">Image</label>
        	    <div class="input-group">
        			<span class="input-group-addon">
        			<i class="fa fa-picture-o"></i>
        			</span>
        			<input type="file" name="category_image" class="form-control" id="focusedinput">
	        	</div>
		
                </div>
                   
                <div class="col-md-12">
                <label class="control-label">Description</label>
                <textarea id="editor1" name="category_description" rows="10" cols="80"></textarea>
                </div>
                   
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
