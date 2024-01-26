<div class="container">
    <div class="row">
        <div class="col-md-6">
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header bg-info text-white">
            Data File Divisi Pencegahan, PARMAS & HUMAS
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
                foreach ($pencegahanadm as $pnc) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $pnc->Tanggal; ?></td>
                        <td><?php echo $pnc->Kode; ?></td>
                        <td><?php echo $pnc->Uraian; ?></td>
                        <td></td>
                        <td></td>
                        <td><button type="submit" name="bcari" class="btn btn btn-primary">Edit</button>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</div>