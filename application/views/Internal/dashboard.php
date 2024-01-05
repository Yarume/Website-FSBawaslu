  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home
      </h1>
      
    </section>

<section class="content">
    <div class="alert alert-warning  alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        SELAMAT DATANG <?= strtoupper($this->session->userdata('username')) ?>
        <p class="lead">DATABASE BADAN PENGAWAS PEMILIHAN UMUM PROVINSI BALI</p>
    </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Seach Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Devisi</th>
                  <th>Tahun</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach ($Hukum as $data_h) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data_h->Uraian; ?></td>
                        <td>Divisi - Hukum</td>
                        <td><?php echo date('Y', strtotime($data_h->Tanggal));?></td>
                        <td>
                            <a href="<?php echo base_url('hukum') ?>" rel="noopener noreferrer" class="btn btn btn-primary">View</a>
                    </td>
                    </tr>
                <?php endforeach ?>
                <?php
                foreach ($Penanganan as $data_h) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data_h->Uraian; ?></td>
                        <td>Divisi - Penanganan</td>
                        <td><?php echo date('Y', strtotime($data_h->Tanggal));?></td>
                        <td>
                            <a href="<?php echo base_url('hukum') ?>" rel="noopener noreferrer" class="btn btn btn-primary">View</a>
                    </td>
                    </tr>
                <?php endforeach ?>

                <?php
                foreach ($Pencegahan as $data_h) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data_h->Uraian; ?></td>
                        <td>Divisi - Pencegahan</td>
                        <td><?php echo date('Y', strtotime($data_h->Tanggal));?></td>
                        <td>
                            <a href="<?php echo base_url('hukum') ?>" rel="noopener noreferrer" class="btn btn btn-primary">View</a>
                    </td>
                    </tr>
                <?php endforeach ?>

                <?php
                foreach ($Sdm as $data_h) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data_h->Uraian; ?></td>
                        <td>Divisi - SDM</td>
                        <td><?php echo date('Y', strtotime($data_h->Tanggal));?></td>
                        <td>
                            <a href="<?php echo base_url('hukum') ?>" rel="noopener noreferrer" class="btn btn btn-primary">View</a>
                    </td>
                    </tr>
                <?php endforeach ?>

                <?php
                foreach ($Buku as $data_h) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data_h->nama; ?></td>
                        <td>Buku</td>
                        <td><?php echo date('Y', strtotime($data_h->tanggal));?></td>
                        <td>
                            <a href="<?php echo base_url('hukum') ?>" rel="noopener noreferrer" class="btn btn btn-primary">View</a>
                    </td>
                    </tr>
                <?php endforeach ?>

                <?php
                foreach ($Majalah as $data_h) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data_h->nama; ?></td>
                        <td>Majalah</td>
                        <td><?php echo date('Y', strtotime($data_h->tanggal));?></td>
                        <td>
                            <a href="<?php echo base_url('hukum') ?>" rel="noopener noreferrer" class="btn btn btn-primary">View</a>
                    </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
                <tfoot>
                <tr>
                <th>No</th>
                  <th>Nama</th>
                  <th>Devisi</th>
                  <th>Tahun</th>
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