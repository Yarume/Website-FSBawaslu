  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Edit - <?= $dataedit->Kode ?> 
      </h1>
      
    </section>

<section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box">
          <div class="box-header with-border">
              <h3 class="box-title">Form Edit Data
                            <b><?php if(isset($response)) echo $response; ?></b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form method='post' action='' enctype='multipart/form-data'>
                <div class="form-group">
                    <label for="kode">Kode</label>
                    <input type="text" class="form-control" name="kode" name="kode" value="<?= $dataedit->Kode ?>">
                </div>
                <div class="form-group">
                    <label for="uraian">Uraian</label>
                    <input type="text" class="form-control" name="uraian" name="uraian" value="<?= $dataedit->Uraian ?>">
                </div>
                <?php
                if($this->session->userdata('peringkat') != "guest"){
                    echo ' <div class="form-group">
                    <label for="file">File</label>
                    <input type="file" class="form-control-file" name="file">
                </div>';
                }
                ?>
                <div class="submit">
                    <input type='submit' value='Update Data' name='update' />
                </div>
            </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-xs-12">
          <div class="box">
          <div class="box-header with-border">
              <h3 class="box-title">Riwayat Perubahan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Username</th>
                    <th>File</th>
                    <th>Download</th>
                </tr>
                </thead>
                <tbody>
                <?php
                        $no = 1;
                        foreach ($riwayat as $data_riwayat) : ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data_riwayat->tanggal; ?></td>
                            <td><?php echo $data_riwayat->username; ?></td>
                            <td><?php echo $data_riwayat->nama_file; ?></td>
                            <td><a href="<?php echo base_url('uploads/').$data_riwayat->nama_file; ?>" target="_blank" rel="noopener noreferrer">File</a></td>
                        </tr>
                        <?php endforeach ?>
                </tbody>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Username</th>
                    <th>File</th>
                    <th>Download</th>
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