  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Divisi - Menu
      </h1>
      
    </section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
          <div class="box-header with-border">
              <h3 class="box-title"><?= $title; ?></h3>
              <?php
                if ($this->session->userdata('peringkat') != 'guest') {
                    echo '<a href="'.base_url($divisi).'/upload_data" class="btn btn-primary">Upload Data</a>';
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
                    <th>Tanggal</th>
                    <th>Kode</th>
                    <th>Uraian</th>
                    <th>File</th>
                    <?php
                    if ($this->session->userdata('peringkat') != 'guest') {
                        echo '<th>Status</th>
                        <th>Aksi</th>';
                    }
                    ?>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach ($raw_data as $data) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data->Tanggal; ?></td>
                        <td><?php echo $data->Kode; ?></td>
                        <td><?php echo $data->Uraian; ?></td>
                        
                        <td><a href="<?php echo base_url('uploads/').$data->File; ?>" target="_blank" rel="noopener noreferrer">File</a></td>
                        <?php 
                        if ($this->session->userdata('peringkat') != 'guest') {
                            switch ($data->Status) {
                                case 'Valid':
                                    echo '<td><span class="label bg-green">Approved</span></td>';
                                break;

                                case 'Butuh Validasi':
                                    echo '<td><span class="label bg-yellow">Butuh Validasi</span></td>';
                                break;

                                case 'Ditolak':
                                    echo '<td><span class="label bg-red">Ditolak</span></td>';
                                break;
                            }
                        }   
                        ?>
                    
                        <?php
                        if ($this->session->userdata('peringkat') != 'guest') {
                            echo '<td><a href="'.base_url($divisi."/edit_data/").$data->No.'" class="btn btn btn-primary">Edit</a>
                            <button onclick="validate('.$data->No.')" class="btn btn btn-danger">Delete</button>
                        </td>';
                        }
                        ?>
                        
                    </tr>
                <?php endforeach ?>
                </tbody>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Kode</th>
                    <th>Uraian</th>
                    <?php
                    if ($this->session->userdata('peringkat') != 'guest') {
                        echo '<th>Status</th>
                        <th>Aksi</th>';
                    }
                    ?>
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
