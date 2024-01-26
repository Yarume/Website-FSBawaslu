<div class="container">
    <div class="row">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>hukum/uploadhukum" class="btn btn-primary">Upload Data</a>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header bg-info text-white">
            Data File Divisi Hukum & Penyelesaian Sengketa
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
                foreach ($hukum as $hkm) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $hkm->Tanggal; ?></td>
                        <td><?php echo $hkm->Kode; ?></td>
                        <td><?php echo $hkm->Uraian; ?></td>
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