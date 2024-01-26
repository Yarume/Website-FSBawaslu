<div class="container">
    <div class="row">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>sdm/uploadsdm" class="btn btn-primary">Upload Data</a>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header bg-info text-white">
            Data File Divisi SDM, Organisasi, Pendidikan & Pelatihan
        </div>
        <div class="card-body">
            <table class="table table-borderd table-hovered table-striped">
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Kode</th>
                    <th>Uraian</th>
                    <th>File</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 1;
                foreach ($sdm as $sdm) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $sdm->Tanggal; ?></td>
                        <td><?php echo $sdm->Kode; ?></td>
                        <td><?php echo $sdm->Uraian; ?></td>
                        <td></td>
                        <td><button type="submit" name="bcari" class="btn btn btn-primary">Edit</button>
                            <button type="reset" name="bbatal" class="btn btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</div>