<div class="container">
    <div class="row">
        <?php
        if ($this->session->userdata('peringkat') != 'guest') {
            echo '<div class="col-md-6">
            <a href="'.base_url($divisi).'/upload_data" class="btn btn-primary">Upload Data</a>
        </div>';
        }
        ?>
        
    </div>
    <div class="card mt-3">
        <div class="card-header bg-info text-white">
            <?= $title; ?>
        </div>
        <div class="card-body">
            <table class="table table-borderd table-hovered table-striped">
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Kode</th>
                    <th>Uraian</th>
                    <th>Status</th>
                    <th>File</th>
                    <?php
                    if ($this->session->userdata('peringkat') != 'guest') {
                        echo '<th>Aksi</th>';
                    }
                    ?>
                    
                </tr>
                <?php
                $no = 1;
                foreach ($raw_data as $data) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data->Tanggal; ?></td>
                        <td><?php echo $data->Kode; ?></td>
                        <td><?php echo $data->Uraian; ?></td>
                        <td>
                            <?php 
                            switch ($data->Status) {
                                case 'Valid':
                                    echo '<span class="badge badge-success">Approved</span>';
                                break;

                                case 'Butuh Validasi':
                                    echo '<span class="badge badge-warning">Butuh Validasi</span>';
                                break;

                                case 'Ditolak':
                                    echo '<span class="badge badge-danger">Ditolak</span>';
                                break;
                            }
                            ?>
                            
                        </td>
                        <td><a href="<?php echo base_url('uploads/').$data->File; ?>" target="_blank" rel="noopener noreferrer">File</a></td>
                        
                        <?php
                        if ($this->session->userdata('peringkat') != 'guest') {
                            echo '<td><a href="'.base_url($divisi."/edit_data/").$data->No.'" class="btn btn btn-primary">Edit</a>
                            <button onclick="validate('.$data->No.')" class="btn btn btn-danger">Delete</button>
                        </td>';
                        }
                        ?>
                        
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</div>
<script>
        function validate(id) {
            var valid = confirm("Kamu Yakin ingin Menghapus data ini ?");
            if (valid) {
                window.location = '<?= $divisi; ?>/delete_data/'+id;
            }
        }
    </script>


