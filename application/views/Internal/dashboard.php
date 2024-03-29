  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home 1
      </h1>
    </section>
    <section class="content">

    <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                    <h3><?= $count_hukum; ?></h3>
                        <p>Hukum dan Penyelesaian <br> Sengketa</p>
                    </div>
                    <div class="icon">
                        <i class="ion-android-checkbox-outline"></i>
                    </div>
                    
                    <a href="#" class="small-box-footer"><span></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                    <h3><?= $count_pencegahan; ?></h3>
                        <p>Pencegahan <br> PARMAS & HUMAS</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer"><span></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                    <h3><?= $count_penanganan; ?></h3>
                        <p>Penanganan Pelanggaran, Data dan Informasi</p>
                    </div>
                    <div class="icon">
                        <i class="ion-android-remove-circle"></i>
                    </div>
                    <a href="#" class="small-box-footer"><span></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                    <h3><?= $count_sdm; ?></h3>
                        <p>SDM, Organisasi, Pendidikan dan Pelatihan</p>
                    </div>
                    <div class="icon">
                        <i class="ion-ios-people"></i>
                    </div>
                    <a href="#" class="small-box-footer"><span></a>
                </div>
            </div>
            <!-- ./col -->
        </div>

    <!-- <div class="alert alert-warning  alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        SELAMAT DATANG <?= strtoupper($this->session->userdata('username')) ?>
        <p class="lead">DATABASE BADAN PENGAWAS PEMILIHAN UMUM PROVINSI BALI</p>
    </div> -->
    
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Search Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>uploader</th>
                  <th>Nama</th>
                  <th>Divisi</th>
                  <th>Taman Pustaka</th>
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
                        <?php
                        $CI =& get_instance();
                        $CI->load->model('Auth_model');
                        $result = $CI->Auth_model->get_username($data_h->User_id);
                        ?>
                        <td><?php echo $result[0]->username ?></td>
                        <td><?php echo $data_h->Uraian; ?></td>
                        <td>Divisi - Hukum</td>
                        <td></td>
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
                        <?php
                        $CI =& get_instance();
                        $CI->load->model('Auth_model');
                        $result = $CI->Auth_model->get_username($data_h->User_id);
                        ?>
                        <td><?php echo $result[0]->username ?></td>
                        <td><?php echo $data_h->Uraian; ?></td>
                        <td>Divisi - Pencegahan</td>
                        <td></td>
                        <td><?php echo date('Y', strtotime($data_h->Tanggal));?></td>
                        <td>
                            <a href="<?php echo base_url('pencegahan') ?>" rel="noopener noreferrer" class="btn btn btn-primary">View</a>
                    </td>
                    </tr>
                <?php endforeach ?>

                <?php
                foreach ($Penanganan as $data_h) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <?php
                        $CI =& get_instance();
                        $CI->load->model('Auth_model');
                        $result = $CI->Auth_model->get_username($data_h->User_id);
                        ?>
                        <td><?php echo $result[0]->username ?></td>
                        <td><?php echo $data_h->Uraian; ?></td>
                        <td>Divisi - Penanganan</td>
                        <td></td>
                        <td><?php echo date('Y', strtotime($data_h->Tanggal));?></td>
                        <td>
                            <a href="<?php echo base_url('penanganan') ?>" rel="noopener noreferrer" class="btn btn btn-primary">View</a>
                    </td>
                    </tr>
                <?php endforeach ?>


                <?php
                foreach ($Sdm as $data_h) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <?php
                        $CI =& get_instance();
                        $CI->load->model('Auth_model');
                        $result = $CI->Auth_model->get_username($data_h->User_id);
                        ?>
                        <td><?php echo $result[0]->username ?></td>
                        <td><?php echo $data_h->Uraian; ?></td>
                        <td>Divisi - SDM</td>
                        <td></td>
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
                        <?php
                        $CI =& get_instance();
                        $CI->load->model('Auth_model');
                        $result = $CI->Auth_model->get_username($data_h->user_id);
                        ?>
                        <td><?php echo $result[0]->username ?></td>
                        <td><?php echo $data_h->nama; ?></td>
                        <td></td>
                        <td>Buku</td>
                        <td><?php echo date('Y', strtotime($data_h->tanggal));?></td>
                        <td>
                            <a href="<?php echo base_url('tamanpustaka/buku') ?>" rel="noopener noreferrer" class="btn btn btn-primary">View</a>
                    </td>
                    </tr>
                <?php endforeach ?>

                <?php
                foreach ($Majalah as $data_h) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <?php
                        $CI =& get_instance();
                        $CI->load->model('Auth_model');
                        $result = $CI->Auth_model->get_username($data_h->user_id);
                        ?>
                        <td><?php echo $result[0]->username ?></td>
                        <td><?php echo $data_h->nama; ?></td>
                        <td></td>
                        <td>Majalah</td>
                        <td><?php echo date('Y', strtotime($data_h->tanggal));?></td>
                        <td>
                            <a href="<?php echo base_url('tamanpustaka/majalah') ?>" rel="noopener noreferrer" class="btn btn btn-primary">View</a>
                    </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
                <tfoot>
                <tr>
                <th>No</th>
                  <th>Nama</th>
                  <th>Divisi</th>
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