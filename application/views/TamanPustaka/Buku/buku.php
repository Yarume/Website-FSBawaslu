<div class="container">
    <h1 class="text-center">Buku Bawaslu Provinsi Bali</h1>
    <?php
    if($this->session->userdata('peringkat') != "guest"){
        echo '<a href="'.base_url().'tamanpustaka/uploadbuku" class="btn btn-primary">Upload</a>';
    }
    ?>
    
    <div class="row">
        <div class="col-md-6"></div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <table class="table table-borderd table-hovered table-striped">
                <tr>
                    <th>No</th>
                    <th>Tanggal Upload</th>
                    <th>Nama</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Buku</th>
                </tr>
                <?php
                $no = 1;
                foreach ($raw_data as $data) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data->tanggal; ?></td>
                        <td><?php echo $data->nama; ?></td>
                        <td><?php echo $data->penulis; ?></td>
                        <td><?php echo $data->penerbit; ?></td>
                        <td><a href="<?php echo base_url('uploads/').$data->file; ?>" target="_blank" rel="noopener noreferrer">File</a></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</div>