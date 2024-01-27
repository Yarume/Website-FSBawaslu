  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Management User
      </h1>
    </section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
          <div class="box-header with-border">
                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-user">
                       Tambah User
                   </button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <br>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                      <th>No</th>
                      <th>Username</th>
                      <th>Role</th>
                      <th>Action</th>
                  </tr>      
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach ($showdata as $data) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data->username; ?></td>
                        <td><?php echo $data->peringkat; ?></td>
                        <td><a href="'" class="btn btn btn-primary">Edit</a></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
                <tfoot>
                <tr>
                      <th>No</th>
                      <th>Username</th>
                      <th>Role</th>
                      <th>Action</th>
                  </tr>   
                </tfoot>
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
  