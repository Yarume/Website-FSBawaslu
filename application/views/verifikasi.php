<div class="container">
    <div class="card mt-3">
        <div class="card-header bg-info text-white">
            Verifikasi Data
        </div>
        <div class="card-body">
            <table class="table table-borderd table-hovered table-striped">
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>User</th>
                    <th>Uraian</th>
                    <th>File</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    
                <?php
                $no = 1;
                foreach ($Hukum as $data_h) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data_h->Tanggal; ?></td>
                        <td><?php echo $data_h->username; ?></td>
                        <td><?php echo $data_h->Uraian; ?></td>
                        <td><a href="<?php echo base_url('uploads/').$data_h->File; ?>" target="_blank" rel="noopener noreferrer">File</a></td>
                        <td>Divisi - Hukum</td>
                        <td>
                            <a href="<?php echo base_url('verifikasi/Valid/').$data_h->No; ?>/Hukum" rel="noopener noreferrer" class="btn btn btn-primary">Terima</a>
                            <a href="<?php echo base_url('verifikasi/Ditolak/').$data_h->No; ?>/Hukum" rel="noopener noreferrer" class="btn btn btn-danger">Tolak</a>
                    </td>
                    </tr>
                <?php endforeach ?>
                <?php
                foreach ($Penanganan as $data_h) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data_h->Tanggal; ?></td>
                        <td><?php echo $data_h->username; ?></td>
                        <td><?php echo $data_h->Uraian; ?></td>
                        <td><a href="<?php echo base_url('uploads/').$data_h->File; ?>" target="_blank" rel="noopener noreferrer">File</a></td>
                        <td>Divisi - Penanganan</td>
                        <td>
                            <a href="<?php echo base_url('verifikasi/Valid/').$data_h->No; ?>/Penanganan" rel="noopener noreferrer" class="btn btn btn-primary">Terima</a>
                            <a href="<?php echo base_url('verifikasi/Ditolak/').$data_h->No; ?>/Penanganan" rel="noopener noreferrer" class="btn btn btn-danger">Tolak</a>
                    </td>
                    </tr>
                <?php endforeach ?>
                <?php
                foreach ($Pencegahan as $data_h) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data_h->Tanggal; ?></td>
                        <td><?php echo $data_h->username; ?></td>
                        <td><?php echo $data_h->Uraian; ?></td>
                        <td><a href="<?php echo base_url('uploads/').$data_h->File; ?>" target="_blank" rel="noopener noreferrer">File</a></td>
                        <td>Divisi - Pencegahan</td>
                        <td>
                            <a href="<?php echo base_url('verifikasi/Valid/').$data_h->No; ?>/Pencegahan" rel="noopener noreferrer" class="btn btn btn-primary">Terima</a>
                            <a href="<?php echo base_url('verifikasi/Ditolak/').$data_h->No; ?>/Pencegahan" rel="noopener noreferrer" class="btn btn btn-danger">Tolak</a>
                    </td>
                    </tr>
                <?php endforeach ?>
                <?php
                foreach ($Sdm as $data_h) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data_h->Tanggal; ?></td>
                        <td><?php echo $data_h->username; ?></td>
                        <td><?php echo $data_h->Uraian; ?></td>
                        <td><a href="<?php echo base_url('uploads/').$data_h->File; ?>" target="_blank" rel="noopener noreferrer">File</a></td>
                        <td>Divisi - Sdm</td>
                        <td>
                            <a href="<?php echo base_url('verifikasi/Valid/').$data_h->No; ?>/Sdm" rel="noopener noreferrer" class="btn btn btn-primary">Terima</a>
                            <a href="<?php echo base_url('verifikasi/Ditolak/').$data_h->No; ?>/Sdm" rel="noopener noreferrer" class="btn btn btn-danger">Tolak</a>
                    </td>
                    </tr>
                <?php endforeach ?>
                </tr>
            </table>
        </div>
    </div>
</div>