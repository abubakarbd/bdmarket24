 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Brand
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Brand</li>
        <li><a class="text-teal" href="<?php echo base_url();?>add-brand"><i class="fa fa-fw fa-user-plus"></i>Create New</a></li>
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

      <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Orders</a></li>
              <li><a href="#tab_2" data-toggle="tab">Stock</a></li>
              <li><a href="#tab_3" data-toggle="tab">Customer</a></li>
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <b>How to use:</b>

                <p>Exactly like the original bootstrap tabs except you should use
                  the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my whole heart.
                I am alone, and feel the charm of existence in this spot,
                which was created for the bliss of souls like mine. I am so happy,
                my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                that I neglect my talents. I should be incapable of drawing a single stroke
                at the present moment; and yet I feel that I never was a greater artist than now.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                 <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_21" data-toggle="tab">Orders</a></li>
              <li><a href="#tab_22" data-toggle="tab">Stock</a></li>
              <li><a href="#tab_23" data-toggle="tab">Customer</a></li>
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_21">
                <b>How to use:</b>

                <p>Exactly like the original bootstrap tabs except you should use
                  the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my whole heart.
                I am alone, and feel the charm of existence in this spot,
                which was created for the bliss of souls like mine. I am so happy,
                my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                that I neglect my talents. I should be incapable of drawing a single stroke
                at the present moment; and yet I feel that I never was a greater artist than now.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_22">
                The European languages are members of the same family. Their separate existence is a myth.
                For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                in their grammar, their pronunciation and their most common words. Everyone realizes why a
                new common language would be desirable: one could refuse to pay expensive translators. To
                achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                words. If several languages coalesce, the grammar of the resulting language is more simple
                and regular than that of the individual languages.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_23">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane row" id="tab_3">
                          <div class="box-body">
              <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>Town / City</th>
                  <th>District</th>
                  <th>Sub District</th>
                  <th>Address</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
     
                <tr>
                  <td>01</td>
                  <td>Name</td>
                  <td>Mobile</td>
                  <td>Town / City</td>
                  <td>District</td>
                  <td>Sub District </td>
                  <td>Address</td>
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
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- END CUSTOM TABS -->

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
 