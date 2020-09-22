 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Coupons
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Coupons</li>
        <li><a class="text-teal" href="<?php echo base_url();?>add-coupons"><i class="fa fa-fw fa-user-plus"></i>Create New</a></li>
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
                  <th>Code</th>
                  <th>Amount</th>
                  <th>Expiry date</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
     
                <tr>
                  <td>01</td>
                  <td>Code</td>
                  <td>Amount</td>
                  <td>12/12/2020</td>
                  <td>Description</td>
                  <td>
                      <span class="label label-success">Approved</span>
                      <span class="label label-danger">Denied</span>
                  </td>
                  <td>
                  <div class="mailbox-controls with-border text-center">
                    <div class="btn-group">
                      <a href=""><button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                        <i class="fa fa-fw fa-thumbs-up text-green"></i></button></a>
                    </div>
                    <div class="btn-group">
                      <a href=""><button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                        <i class="fa fa-fw fa-thumbs-down text-red"></i></button></a>
                    </div>
                    
                    <div class="btn-group">
                      <a href=""><button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                        <i class="fa fa-edit"></i></button></a>
                    </div>
                    <div class="btn-group">
                      <a href=""><button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                        <i class="fa fa-trash-o"></i></button></a>
                    </div>
                  </div>
                  </td>
                </tr>
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
 