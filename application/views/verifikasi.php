  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SUPERADMIN - MENU
      </h1>
      
    </section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
          <div class="box-header with-border">
              <h3 class="box-title">VERIFIKASI DATA</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
           
            <br>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>User</th>
                    <th>Uraian</th>
                    <th>File</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach ($Hukum as $data_h) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data_h->Tanggal; ?></td>
                        <td><?php echo $data_h->username; ?></td>
                        <td><?php echo $data_h->Uraian; ?></td>
                        <td><a href="<?php echo base_url('uploads/').$data_h->File; ?>" target="_blank" rel="noopener noreferrer">File</a></td>
                        <td>Divisi - Hukum</td>
                        <td>
                            <a href="<?php echo base_url('verifikasi/Valid/').$data_h->No; ?>/Hukum" rel="noopener noreferrer" class="btn btn btn-primary">Terima</a>
                            <a href="<?php echo base_url('Catatan/').$data_h->No; ?>/Hukum" rel="noopener noreferrer" class="btn btn btn-danger">Tolak</a>
                    </td>
                    </tr>
                <?php endforeach ?>
                <?php
                foreach ($Penanganan as $data_h) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data_h->Tanggal; ?></td>
                        <td><?php echo $data_h->username; ?></td>
                        <td><?php echo $data_h->Uraian; ?></td>
                        <td><a href="<?php echo base_url('uploads/').$data_h->File; ?>" target="_blank" rel="noopener noreferrer">File</a></td>
                        <td>Divisi - Penanganan</td>
                        <td>
                            <a href="<?php echo base_url('verifikasi/Valid/').$data_h->No; ?>/Penanganan" rel="noopener noreferrer" class="btn btn btn-primary">Terima</a>
                            <a href="<?php echo base_url('Catatan/').$data_h->No; ?>/Penanganan" rel="noopener noreferrer" class="btn btn btn-danger">Tolak</a>
                    </td>
                    </tr>
                <?php endforeach ?>
                <?php
                foreach ($Pencegahan as $data_h) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data_h->Tanggal; ?></td>
                        <td><?php echo $data_h->username; ?></td>
                        <td><?php echo $data_h->Uraian; ?></td>
                        <td><a href="<?php echo base_url('uploads/').$data_h->File; ?>" target="_blank" rel="noopener noreferrer">File</a></td>
                        <td>Divisi - Pencegahan</td>
                        <td>
                            <a href="<?php echo base_url('verifikasi/Valid/').$data_h->No; ?>/Pencegahan" rel="noopener noreferrer" class="btn btn btn-primary">Terima</a>
                            <a href="<?php echo base_url('Catatan/').$data_h->No; ?>/Pencegahan" rel="noopener noreferrer" class="btn btn btn-danger">Tolak</a>
                    </td>
                    </tr>
                <?php endforeach ?>
                <?php
                foreach ($Sdm as $data_h) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data_h->Tanggal; ?></td>
                        <td><?php echo $data_h->username; ?></td>
                        <td><?php echo $data_h->Uraian; ?></td>
                        <td><a href="<?php echo base_url('uploads/').$data_h->File; ?>" target="_blank" rel="noopener noreferrer">File</a></td>
                        <td>Divisi - Sdm</td>
                        <td>
                            <a href="<?php echo base_url('verifikasi/Valid/').$data_h->No; ?>/Sdm" rel="noopener noreferrer" class="btn btn btn-primary">Terima</a>
                            <a href="<?php echo base_url('Catatan/').$data_h->No; ?>/Sdm" rel="noopener noreferrer" class="btn btn btn-danger">Tolak</a>
                    </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>User</th>
                    <th>Uraian</th>
                    <th>File</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
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
  <script>
        function validate(id) {
            var valid = confirm("Kamu Yakin ingin Menghapus data ini ?");
            if (valid) {
                window.location = '<?= $divisi; ?>/delete_data/'+id;
            }
        }
    </script>
