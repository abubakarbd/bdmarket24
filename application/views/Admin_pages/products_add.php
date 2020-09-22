 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo base_url();?>product"><i class="fa fa-fw fa-bars"></i> Products</a></li>
        <li class="active">Product Add</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Cost</h3>
          

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <p><?php if(isset($msg)){echo $msg;}?></p>
        <!-- /.box-header -->
        <?php echo form_open_multipart('product-save', 'class=form-horizontal');?>
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
                    <div class="col-md-12 form-group group-mail">
                 <label class="control-label">Product Name <span class="text-red">*</span></label>
        		 <div class="input-group">
        			<span class="input-group-addon">
        				<i class="fa fa-line-chart"></i>
        			</span>
        			<input type="text" name="product_name" class="form-control" id="focusedinput" placeholder="Product Name">
        		</div>
        		<?php echo form_error('product_name'); ?>
           </div>
            
            <div class="col-md-6 form-group group-mail">
             <label class="control-label">Brand <span class="text-red">*</span></label>
            <select name="product_brand" id="dob-day" class="form-control select2" style="width: 100%;">
    			  <option>Select Brand</option>
    			  <?php foreach($activ_brand as $brand){?>
    			    <option value="<?php echo $brand->brand_id;?>"><?php echo $brand->brand_name;?></option>
    			    <?php }?>
    		</select>
           </div>
           
                <div class="col-md-6 form-group group-mail">
             <label class="control-label">Category <span class="text-red">*</span></label>
            <select name="product_category" id="dob-day" class="form-control select2" style="width: 100%;">
    			  <option>Select Category</option>
    			    <?php foreach($activ_category as $category){?>
    			    <option value="<?php echo $category->category_id;?>"><?php echo $category->category_name;?></option>
    			    <?php }?>
    		</select>
           </div>
  </div>
            <!-- /.col -->
            
           <!-- Right Site--> 
            
 <div class="col-md-6">

   <div class="col-md-4 form-group group-mail">
         <label class="control-label">Regular price (৳ ) <span class="text-red">*</span> </label>
        	 <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-balance-scale"></i>
			</span>
			<input type="text" name="product_rprice" class="form-control" id="focusedinput" placeholder="Quantity">
		</div>
   </div>

   <div class="col-md-4 form-group group-mail">
         <label class="control-label">Sale price (৳ ) <span class="text-red">*</span></label>
        	 <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-money"></i>
			</span>
			<input type="text" name="product_price" class="form-control" id="focusedinput" placeholder="Amount">
		</div>
		<?php echo form_error('product_price'); ?>
   </div>
   
       <div class="col-md-4 form-group group-mail">
         <label class="control-label">Stock quantity  <span class="text-red">*</span></label>
		 <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-line-chart"></i>
			</span>
			<input type="text" name="product_qit" class="form-control" id="focusedinput" placeholder="quantity">
		</div>
   </div>
   
      <div class="col-md-6 form-group group-mail">
             <label class="control-label">Type <span class="text-red">*</span></label>
            <select name="product_type" id="dob-day" class="form-control select3" style="width: 100%;">
    			  <option>Select Type</option>
    			    <option value="January">January</option>
                    <option value="Febuary">Febuary</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
    		</select>
           </div>
   
   <div class="col-md-6 form-group group-mail">
         <label class="control-label">Product Image</label>
        <div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-picture-o"></i>
			</span>
			<input type="file" name="product_image" class="form-control" id="focusedinput">
		</div>
   </div>

</div>

           <div class="col-md-12">
          
               <div class="col-md-12">
                  <div class="form-group">
                  <label>Short Description</label>
                  <textarea name="product_short_desc" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
            </div>
            
                <div class="col-md-12">
                <label class="control-label">Long Description</label>
                <textarea id="editor1" name="product_long_desc" rows="10" cols="80"></textarea>
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