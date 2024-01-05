<div class="container">
    <h1 class="text-center"><?= $type; ?> Bawaslu Provinsi Bali</h1>
    <a href="<?= base_url(); ?>tamanpustaka/uploadbuku" class="btn btn-primary">Upload</a>
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
                        <td><?php echo $data->file; ?></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</div>