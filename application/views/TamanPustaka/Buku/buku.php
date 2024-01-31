<link href="<?= base_url(); ?>assets/css/dflip.min.css?ver=2.1.189" rel="stylesheet" type="text/css">

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      TAMAN PUSTAKA - Buku <?php
    if ($this->session->userdata('peringkat') != 'staff') {
        echo '<a href="'.base_url().'tamanpustaka/uploadbuku" class="btn btn-primary">Upload Data</a>';
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
      <img class="profile-user-img img-responsive img-circle" src="<?= base_url(); ?>assets/img/logobuku.jpg" alt="User profile picture">
      <h3 class="profile-username text-center"></h3>
      <ul class="list-group list-group-unbordered">
      <li class="list-group-item">
          <b>Penulis</b> <a class="pull-right"><?php echo $data->penulis; ?></a>
        </li>
        <li class="list-group-item">
          <b>Penerbit</b> <a class="pull-right"><?php echo $data->penerbit; ?></a>
        </li>
        <li class="list-group-item">
          <b>Tanggal Upload</b> <a class="pull-right"><?php echo $data->tanggal; ?></a>
        </li>
        <li class="list-group-item">
          <b>Uploader</b> <a class="pull-right"><?php echo $data->nama; ?></a>
        </li>
      </ul>
      <a class="_df_custom btn btn-primary btn-block" href="#" source="<?= base_url(); ?>uploads/<?php echo $data->file; ?>">View File</a>
      <a href="<?php echo base_url('uploads/').$data->file; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-block">Download File</a>
      <?php
      if ($this->session->userdata('peringkat') == 'admin') {
          echo '
          <button onclick="validate('.$data->id.')" class="btn btn btn-danger btn-block">Delete File</button>
      </td>';
      }
      ?>
    </div>
  </div>
</div>

<?php endforeach ?>

</div>

</section>

</div>


<script src="<?= base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/dflip.min.js" type="text/javascript"></script>
<script>
        function validate(id) {
            var valid = confirm("Kamu Yakin ingin Menghapus data ini ?");
            if (valid) {
                window.location = '<?= base_url(); ?>/Delete_TamanPustaka/Buku/'+id;
            }
        }
    </script>