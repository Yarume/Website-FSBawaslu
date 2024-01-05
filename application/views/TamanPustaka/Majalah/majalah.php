  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      TAMAN PUSTAKA
      </h1>
      
    </section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
          <div class="box-header with-border">
              <h3 class="box-title">Majalah Cakra Bawaslu Provinsi Bali</h3>
              <?php
                if ($this->session->userdata('peringkat') != 'guest') {
                    echo '<a href="'.base_url().'tamanpustaka/uploadmajalah" class="btn btn-primary">Upload Data</a>';
                }
            ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
           
            <br>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Upload</th>
                    <th>Nama</th>
                    <th>Edisi</th>
                    <th>Majalah</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach ($raw_data as $data) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data->tanggal; ?></td>
                        <td><?php echo $data->nama; ?></td>
                        <td><?php echo $data->edisi; ?></td>
                        <td><a href="<?php echo base_url('uploads/').$data->file; ?>" target="_blank" rel="noopener noreferrer">File</a></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Tanggal Upload</th>
                    <th>Nama</th>
                    <th>Edisi</th>
                    <th>Majalah</th>
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

