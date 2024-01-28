<link href="<?= base_url(); ?>assets/css/dflip.min.css?ver=2.1.189" rel="stylesheet" type="text/css">

<div class="content-wrapper">
  <section class="content-header">
    <h1>
    TAMAN PUSTAKA - Majalah
    <?php
              if ($this->session->userdata('peringkat') != 'guest') {
                  echo '<a href="'.base_url().'tamanpustaka/uploadmajalah" class="btn btn-primary">Upload Data</a>';
              }
            ?>
    
    </h1>
    
  </section>

  <section class="content">
  <br>
<div class="row">

<?php
$no = 1;
foreach ($raw_data as $data) : ?>
<div class="col-md-3">
  <div class="box box-primary">
    <div class="box-body box-profile">
      <img class="profile-user-img img-responsive img-circle" src="<?= base_url(); ?>assets/img/logomajalah.jpg" alt="User profile picture">
      <h3 class="profile-username text-center"></h3>
      <ul class="list-group list-group-unbordered">
      <li class="list-group-item">
          <b>Edisi</b> <a class="pull-right"><?php echo $data->edisi; ?></a>
        </li>
        <li class="list-group-item">
          <b>Uploader</b> <a class="pull-right"><?php echo $data->nama; ?></a>
        </li>
        <li class="list-group-item">
          <b>Tanggal Upload</b> <a class="pull-right"><?php echo $data->tanggal; ?></a>
        </li>
      </ul>
      <a class="_df_custom btn btn-primary btn-block" href="#" source="<?= base_url(); ?>uploads/<?php echo $data->file; ?>">View File</a>
      <a href="<?php echo base_url('uploads/').$data->file; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-block">Download File</a>
    </div>
  </div>
</div>

<?php endforeach ?>

</div>

</section>

</div>
<script src="<?= base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/dflip.min.js" type="text/javascript"></script>