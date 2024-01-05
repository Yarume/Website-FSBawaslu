<div class="jumbotron mt-5 mb-5 mx-5">
    <h1 class="display-4">SELAMAT DATANG <?= strtoupper($this->session->userdata('username')) ?></h1>
    <p class="lead">DATABASE BADAN PENGAWAS PEMILIHAN UMUM PROVINSI BALI</p>
    <hr class="my-4">
    <a class="btn btn-danger btn-lg" href="<?= base_url(); ?>user/logout" role="button">LOGOUT</a>
</div>

<div class="card mt-5 mb-5 mx-5">
  <div class="card-body">
  <table id="myTable" class="display" style="width:100%">
<thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Devisi</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    <?php
    $no = 1;
    foreach ($Hukum as $data_h) : ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data_h->Uraian; ?></td>
            <td>Divisi - Hukum</td>
            <td>
                <a href="<?php echo base_url('hukum') ?>" rel="noopener noreferrer" class="btn btn btn-primary">View</a>
        </td>
        </tr>
    <?php endforeach ?>

    <?php
    foreach ($Penanganan as $data_h) : ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data_h->Uraian; ?></td>
            <td>Divisi - Penanganan</td>
            <td>
                <a href="<?php echo base_url('hukum') ?>" rel="noopener noreferrer" class="btn btn btn-primary">View</a>
        </td>
        </tr>
    <?php endforeach ?>

    <?php
    foreach ($Pencegahan as $data_h) : ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data_h->Uraian; ?></td>
            <td>Divisi - Pencegahan</td>
            <td>
                <a href="<?php echo base_url('hukum') ?>" rel="noopener noreferrer" class="btn btn btn-primary">View</a>
        </td>
        </tr>
    <?php endforeach ?>

    <?php
    foreach ($Sdm as $data_h) : ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data_h->Uraian; ?></td>
            <td>Divisi - SDM</td>
            <td>
                <a href="<?php echo base_url('hukum') ?>" rel="noopener noreferrer" class="btn btn btn-primary">View</a>
        </td>
        </tr>
    <?php endforeach ?>

    <?php
    foreach ($Buku as $data_h) : ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data_h->nama; ?></td>
            <td>Buku</td>
            <td>
                <a href="<?php echo base_url('hukum') ?>" rel="noopener noreferrer" class="btn btn btn-primary">View</a>
        </td>
        </tr>
    <?php endforeach ?>

    <?php
    foreach ($Majalah as $data_h) : ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data_h->nama; ?></td>
            <td>Majalah</td>
            <td>
                <a href="<?php echo base_url('hukum') ?>" rel="noopener noreferrer" class="btn btn btn-primary">View</a>
        </td>
        </tr>
    <?php endforeach ?>
</tbody>
<tfoot>
    <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Office</th>
        <th>Age</th>
    </tr>
</tfoot>
</table>
  </div>
</div>
