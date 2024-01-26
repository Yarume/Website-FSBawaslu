<div class="container">
    <div class="row">
        <div class="col-md-6">
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header bg-info text-white">
            Data File Divisi Penanganan Pelanggaran, Data & Informasi
        </div>
        <div class="card-body">
            <table class="table table-borderd table-hovered table-striped">
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Kode</th>
                    <th>Uraian</th>
                    <th>File</th>
                    <th>Download</th>
                    <th></th>
                </tr>
                <?php
                $no = 1;
                foreach ($penangananadm as $png) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $png->Tanggal; ?></td>
                        <td><?php echo $png->Kode; ?></td>
                        <td><?php echo $png->Uraian; ?></td>
                        <td></td>
                        <td></td>
                        <td><button type="submit" name="bcari" class="btn btn btn-primary">Edit</button></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</div>