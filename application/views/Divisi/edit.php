
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card text-white bg-dark mb-3">
                    <div class="card-body">
                        <div class="card-title">
                            Form Edit Data
                            <b><?php if(isset($response)) echo $response; ?></b>
                        </div>
                        <div class="card-body">
                            <form method='post' action='' enctype='multipart/form-data'>
                                <div class="form-group">
                                    <label for="kode">Kode</label>
                                    <input type="text" class="form-control" name="kode" name="kode" value="<?= $dataedit->Kode ?>">
                                </div>
                                <div class="form-group">
                                    <label for="uraian">Uraian</label>
                                    <input type="text" class="form-control" name="uraian" name="uraian" value="<?= $dataedit->Uraian ?>">
                                </div>
                                <?php
                                if($this->session->userdata('peringkat') != "guest"){
                                    echo ' <div class="form-group">
                                    <label for="file">File</label>
                                    <input type="file" class="form-control-file" name="file">
                                </div>';
                                }
                                ?>
                                <div class="submit">
                                    <input type='submit' value='Update Data' name='update' />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                 <div class="card-header bg-info text-white">
                        Riwayat Perubahan Data
                    </div>
                    <div class="card-body">
                    <table class="table table-borderd table-hovered table-striped">
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Username</th>
                            <th>File</th>
                            <th>Download</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($riwayat as $data_riwayat) : ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data_riwayat->tanggal; ?></td>
                            <td><?php echo $data_riwayat->username; ?></td>
                            <td><?php echo $data_riwayat->nama_file; ?></td>
                            <td><a href="<?php echo base_url('uploads/').$data_riwayat->nama_file; ?>" target="_blank" rel="noopener noreferrer">File</a></td>
                        </tr>
                        <?php endforeach ?>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
